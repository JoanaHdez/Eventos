<?php

namespace App\Modules\Eventos\Congresos\OctavoCongreso\Ponentes\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use RuntimeException;
use Throwable;

class MaterialController extends BaseController
{
    public function subir(): ResponseInterface
    {
        $db = null;
        $transaccionIniciada = false;

        try {
            $idPonente = (int) $this->request->getPost(
                'id_ponente'
            );

            if ($idPonente <= 0) {
                return $this->response
                    ->setStatusCode(422)
                    ->setJSON([
                        'success' => false,
                        'partial_success' => false,
                        'message' =>
                            'Selecciona un ponente válido.',
                        'archivos_guardados' => 0,
                        'archivos_rechazados' => [],
                    ]);
            }

            $db = db_connect();

            /*
             * Validar que el ponente exista
             * y se encuentre activo.
             */
            $ponente = $db
                ->table('eventos_ponentes')
                ->select([
                    'id_ponente',
                    'nombre_completo',
                    'cargo',
                    'activo',
                ])
                ->where(
                    'id_ponente',
                    $idPonente
                )
                ->where(
                    'activo',
                    1
                )
                ->get()
                ->getRowArray();

            if (!$ponente) {
                return $this->response
                    ->setStatusCode(422)
                    ->setJSON([
                        'success' => false,
                        'partial_success' => false,
                        'message' =>
                            'El ponente seleccionado no existe o está inactivo.',
                        'archivos_guardados' => 0,
                        'archivos_rechazados' => [],
                    ]);
            }

            /*
             * Recibir archivos enviados
             * mediante archivos[].
             */
            $archivos = $this->request
                ->getFileMultiple(
                    'archivos'
                );

            if (empty($archivos)) {
                return $this->response
                    ->setStatusCode(422)
                    ->setJSON([
                        'success' => false,
                        'partial_success' => false,
                        'message' =>
                            'Selecciona al menos un archivo.',
                        'archivos_guardados' => 0,
                        'archivos_rechazados' => [],
                    ]);
            }

            /*
             * Formatos permitidos.
             */
            $extensionesPermitidas = [
                'pdf',
                'docx',
                'xlsx',
                'pptx',
                'jpg',
                'jpeg',
                'png',
                'mp4',
                'mp3',
            ];

            /*
             * MIME permitidos.
             */
            $mimesPermitidos = [
                'application/pdf',

                'application/vnd.openxmlformats-officedocument.wordprocessingml.document',

                'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',

                'application/vnd.openxmlformats-officedocument.presentationml.presentation',

                'image/jpeg',
                'image/png',

                'video/mp4',
                'application/mp4',

                'audio/mpeg',
                'audio/mp3',
            ];

            /*
             * Extensiones peligrosas.
             */
            $extensionesPeligrosas = [
                'php',
                'php3',
                'php4',
                'php5',
                'php7',
                'php8',
                'phtml',
                'phar',
                'exe',
                'bat',
                'cmd',
                'com',
                'dll',
                'js',
                'html',
                'htm',
                'sh',
                'bash',
                'cgi',
                'pl',
                'py',
                'jar',
            ];

            $db->transBegin();
            $transaccionIniciada = true;

            /*
             * Buscar la entrega permanente
             * del ponente.
             */
            $entrega = $db
                ->table(
                    'eventos_entregas_material'
                )
                ->where(
                    'id_ponente',
                    $idPonente
                )
                ->get()
                ->getRowArray();

            /*
             * Crear la entrega solamente
             * cuando todavía no exista.
             */
            if (!$entrega) {
                $creada = $db
                    ->table(
                        'eventos_entregas_material'
                    )
                    ->insert([
                        'id_ponente' =>
                            $idPonente,

                        'estado' =>
                            'borrador',

                        'fecha_envio' =>
                            null,

                        'created_at' =>
                            date('Y-m-d H:i:s'),

                        'updated_at' =>
                            date('Y-m-d H:i:s'),
                    ]);

                if (!$creada) {
                    $errorDb = $db->error();

                    throw new RuntimeException(
                        $errorDb['message']
                            ?: 'No fue posible crear la entrega.'
                    );
                }

                $idEntrega =
                    (int) $db->insertID();
            } else {
                $idEntrega =
                    (int) $entrega[
                        'id_entrega'
                    ];
            }

            if ($idEntrega <= 0) {
                throw new RuntimeException(
                    'No fue posible identificar la entrega.'
                );
            }

            $archivosGuardados = 0;
            $archivosRechazados = [];

            /*
             * Procesar cada archivo por separado.
             *
             * Un archivo inválido no impide
             * guardar los demás.
             */
            foreach ($archivos as $archivo) {
                $nombreOriginal = basename(
                    str_replace(
                        [
                            "\0",
                            "\r",
                            "\n",
                        ],
                        '',
                        trim(
                            $archivo
                                ->getClientName()
                        )
                    )
                );

                if ($nombreOriginal === '') {
                    $nombreOriginal =
                        'Archivo sin nombre';
                }

                /*
                 * Validar la carga realizada por PHP.
                 */
                if (!$archivo->isValid()) {
                    $archivosRechazados[] = [
                        'nombre' =>
                            $nombreOriginal,

                        'motivo' =>
                            $archivo
                                ->getErrorString()
                            ?: 'El archivo no es válido.',
                    ];

                    continue;
                }

                if ($archivo->hasMoved()) {
                    $archivosRechazados[] = [
                        'nombre' =>
                            $nombreOriginal,

                        'motivo' =>
                            'El archivo ya no está disponible.',
                    ];

                    continue;
                }

                /*
                 * Validar longitud del nombre.
                 */
                if (
                    mb_strlen(
                        $nombreOriginal
                    ) > 255
                ) {
                    $archivosRechazados[] = [
                        'nombre' =>
                            $nombreOriginal,

                        'motivo' =>
                            'El nombre del archivo es demasiado largo.',
                    ];

                    continue;
                }

                /*
                 * Validar extensión.
                 */
                $extension = strtolower(
                    trim(
                        $archivo
                            ->getClientExtension()
                    )
                );

                if ($extension === '') {
                    $archivosRechazados[] = [
                        'nombre' =>
                            $nombreOriginal,

                        'motivo' =>
                            'El archivo no tiene una extensión válida.',
                    ];

                    continue;
                }

                if (
                    !in_array(
                        $extension,
                        $extensionesPermitidas,
                        true
                    )
                ) {
                    $archivosRechazados[] = [
                        'nombre' =>
                            $nombreOriginal,

                        'motivo' =>
                            sprintf(
                                'La extensión .%s no está permitida.',
                                $extension
                            ),
                    ];

                    continue;
                }

                /*
                 * Revisar la extensión visible
                 * en el nombre.
                 */
                $extensionFinalNombre =
                    strtolower(
                        pathinfo(
                            $nombreOriginal,
                            PATHINFO_EXTENSION
                        )
                    );

                if (
                    in_array(
                        $extensionFinalNombre,
                        $extensionesPeligrosas,
                        true
                    )
                ) {
                    $archivosRechazados[] = [
                        'nombre' =>
                            $nombreOriginal,

                        'motivo' =>
                            'El nombre contiene una extensión peligrosa.',
                    ];

                    continue;
                }

                if (
                    $extensionFinalNombre === '' ||
                    $extensionFinalNombre !==
                        $extension
                ) {
                    $archivosRechazados[] = [
                        'nombre' =>
                            $nombreOriginal,

                        'motivo' =>
                            'La extensión del nombre no coincide con el archivo recibido.',
                    ];

                    continue;
                }

                /*
                 * Validar que el archivo
                 * no esté vacío.
                 */
                $tamanoArchivo =
                    (int) $archivo->getSize();

                if ($tamanoArchivo <= 0) {
                    $archivosRechazados[] = [
                        'nombre' =>
                            $nombreOriginal,

                        'motivo' =>
                            'El archivo está vacío.',
                    ];

                    continue;
                }

                /*
                 * Validar MIME detectado
                 * por el servidor.
                 */
                $mimeReal = strtolower(
                    trim(
                        $archivo->getMimeType()
                    )
                );

                if (
                    $mimeReal === '' ||
                    !in_array(
                        $mimeReal,
                        $mimesPermitidos,
                        true
                    )
                ) {
                    $archivosRechazados[] = [
                        'nombre' =>
                            $nombreOriginal,

                        'motivo' =>
                            sprintf(
                                'El contenido no corresponde con un formato permitido. MIME detectado: %s.',
                                $mimeReal !== ''
                                    ? $mimeReal
                                    : 'desconocido'
                            ),
                    ];

                    continue;
                }

                /*
                 * Validar acceso al archivo temporal.
                 */
                $rutaTemporal =
                    $archivo->getTempName();

                if (
                    $rutaTemporal === '' ||
                    !is_file(
                        $rutaTemporal
                    ) ||
                    !is_readable(
                        $rutaTemporal
                    )
                ) {
                    $archivosRechazados[] = [
                        'nombre' =>
                            $nombreOriginal,

                        'motivo' =>
                            'No fue posible acceder al archivo temporal.',
                    ];

                    continue;
                }

                /*
                 * Leer el archivo para almacenarlo
                 * como BLOB.
                 */
                $contenido =
                    file_get_contents(
                        $rutaTemporal
                    );

                if ($contenido === false) {
                    $archivosRechazados[] = [
                        'nombre' =>
                            $nombreOriginal,

                        'motivo' =>
                            'No fue posible leer el archivo.',
                    ];

                    continue;
                }

                if (
                    strlen($contenido) !==
                    $tamanoArchivo
                ) {
                    unset($contenido);

                    $archivosRechazados[] = [
                        'nombre' =>
                            $nombreOriginal,

                        'motivo' =>
                            'El archivo no pudo leerse completamente.',
                    ];

                    continue;
                }

                /*
                 * Guardar únicamente archivos válidos.
                 *
                 * Un error de base de datos cancela
                 * toda la transacción.
                 */
                $guardado = $db
                    ->table(
                        'eventos_archivos_material'
                    )
                    ->insert([
                        'id_entrega' =>
                            $idEntrega,

                        'nombre_original' =>
                            $nombreOriginal,

                        'extension' =>
                            $extension,

                        'tipo_mime' =>
                            $mimeReal,

                        'tamano_bytes' =>
                            $tamanoArchivo,

                        'contenido' =>
                            $contenido,

                        'created_at' =>
                            date('Y-m-d H:i:s'),
                    ]);

                unset($contenido);

                if (!$guardado) {
                    $errorDb =
                        $db->error();

                    throw new RuntimeException(
                        $errorDb['message']
                            ?: 'No fue posible guardar uno de los archivos válidos.'
                    );
                }

                $archivosGuardados++;
            }

            /*
             * Ningún archivo pudo guardarse.
             */
            if ($archivosGuardados === 0) {
                $db->transRollback();
                $transaccionIniciada = false;

                return $this->response
                    ->setStatusCode(422)
                    ->setJSON([
                        'success' => false,
                        'partial_success' => false,

                        'message' =>
                            'Ninguno de los archivos seleccionados pudo guardarse.',

                        'detalle_rechazos' =>
                            $this
                                ->construirMensajeRechazos(
                                    $archivosRechazados
                                ),

                        'archivos_guardados' =>
                            0,

                        'archivos_rechazados' =>
                            $archivosRechazados,
                    ]);
            }

            /*
             * Mantener abierta la entrega
             * para futuras cargas.
             */
            $actualizada = $db
                ->table(
                    'eventos_entregas_material'
                )
                ->where(
                    'id_entrega',
                    $idEntrega
                )
                ->update([
                    'estado' =>
                        'borrador',

                    'updated_at' =>
                        date('Y-m-d H:i:s'),
                ]);

            if (!$actualizada) {
                $errorDb =
                    $db->error();

                throw new RuntimeException(
                    $errorDb['message']
                        ?: 'No fue posible actualizar la entrega.'
                );
            }

            if (
                $db->transStatus() === false
            ) {
                $errorDb =
                    $db->error();

                throw new RuntimeException(
                    $errorDb['message']
                        ?: 'La base de datos rechazó la operación.'
                );
            }

            $db->transCommit();
            $transaccionIniciada = false;

            $cargaParcial =
                count(
                    $archivosRechazados
                ) > 0;

            return $this->response
                ->setStatusCode(200)
                ->setJSON([
                    'success' => true,

                    'partial_success' =>
                        $cargaParcial,

                    'message' =>
                        $cargaParcial
                            ? sprintf(
                                'Se guardaron %d archivo(s), pero %d no fueron aceptados.',
                                $archivosGuardados,
                                count(
                                    $archivosRechazados
                                )
                            )
                            : 'Material guardado correctamente.',

                    'detalle_rechazos' =>
                        $cargaParcial
                            ? $this
                                ->construirMensajeRechazos(
                                    $archivosRechazados
                                )
                            : '',

                    'ponente' => [
                        'id' =>
                            $ponente[
                                'id_ponente'
                            ],

                        'nombre' =>
                            $ponente[
                                'nombre_completo'
                            ],

                        'cargo' =>
                            $ponente[
                                'cargo'
                            ] ?? '',
                    ],

                    'archivos_guardados' =>
                        $archivosGuardados,

                    'archivos_rechazados' =>
                        $archivosRechazados,
                ]);
        } catch (Throwable $error) {
            if (
                $db !== null &&
                $transaccionIniciada
            ) {
                $db->transRollback();
            }

            log_message(
                'error',
                'Error carga material: {mensaje} en {archivo}:{linea}',
                [
                    'mensaje' =>
                        $error->getMessage(),

                    'archivo' =>
                        $error->getFile(),

                    'linea' =>
                        $error->getLine(),
                ]
            );

            return $this->response
                ->setStatusCode(500)
                ->setJSON([
                    'success' => false,
                    'partial_success' => false,
                    'message' =>
                        $error->getMessage(),
                    'archivos_guardados' => 0,
                    'archivos_rechazados' => [],
                ]);
        }
    }

    /*
     * Construir texto legible
     * para los archivos rechazados.
     */
    private function construirMensajeRechazos(
        array $rechazados
    ): string {
        if (empty($rechazados)) {
            return '';
        }

        $detalles = [];

        foreach ($rechazados as $rechazado) {
            $nombre =
                $rechazado['nombre']
                ?? 'Archivo';

            $motivo =
                $rechazado['motivo']
                ?? 'No fue aceptado.';

            $detalles[] = sprintf(
                '%s: %s',
                $nombre,
                $motivo
            );
        }

        return implode(
            ' | ',
            $detalles
        );
    }

    /*
     * Consultar los archivos cargados
     * por un ponente.
     */
    public function archivos(
        int $idPonente
    ): ResponseInterface {
        try {
            if ($idPonente <= 0) {
                return $this->response
                    ->setStatusCode(422)
                    ->setJSON([
                        'success' => false,
                        'message' =>
                            'El ponente seleccionado no es válido.',
                    ]);
            }

            $db = db_connect();

            $ponente = $db
                ->table(
                    'eventos_ponentes'
                )
                ->select([
                    'id_ponente',
                    'nombre_completo',
                    'cargo',
                    'activo',
                ])
                ->where(
                    'id_ponente',
                    $idPonente
                )
                ->where(
                    'activo',
                    1
                )
                ->get()
                ->getRowArray();

            if (!$ponente) {
                return $this->response
                    ->setStatusCode(404)
                    ->setJSON([
                        'success' => false,
                        'message' =>
                            'El ponente no existe o está inactivo.',
                    ]);
            }

            /*
             * Consultar solamente metadatos.
             * No incluir el campo BLOB.
             */
            $archivos = $db
                ->table(
                    'eventos_archivos_material AS a'
                )
                ->select([
                    'a.id_archivo',
                    'a.nombre_original',
                    'a.extension',
                    'a.tipo_mime',
                    'a.tamano_bytes',
                    'a.created_at',
                ])
                ->join(
                    'eventos_entregas_material AS e',
                    'e.id_entrega = a.id_entrega',
                    'inner'
                )
                ->where(
                    'e.id_ponente',
                    $idPonente
                )
                ->orderBy(
                    'a.created_at',
                    'DESC'
                )
                ->orderBy(
                    'a.id_archivo',
                    'DESC'
                )
                ->get()
                ->getResultArray();

            return $this->response
                ->setStatusCode(200)
                ->setJSON([
                    'success' => true,

                    'ponente' => [
                        'id' =>
                            $ponente[
                                'id_ponente'
                            ],

                        'nombre' =>
                            $ponente[
                                'nombre_completo'
                            ],

                        'cargo' =>
                            $ponente[
                                'cargo'
                            ] ?? '',
                    ],

                    'total' =>
                        count($archivos),

                    'archivos' =>
                        $archivos,
                ]);
        } catch (Throwable $error) {
            log_message(
                'error',
                'Error al consultar archivos del ponente {ponente}: {mensaje} en {archivo}:{linea}',
                [
                    'ponente' =>
                        $idPonente,

                    'mensaje' =>
                        $error->getMessage(),

                    'archivo' =>
                        $error->getFile(),

                    'linea' =>
                        $error->getLine(),
                ]
            );

            return $this->response
                ->setStatusCode(500)
                ->setJSON([
                    'success' => false,
                    'message' =>
                        'No fue posible consultar los archivos guardados.',
                ]);
        }
    }

    /*
     * Descargar un archivo almacenado
     * en la base de datos.
     */
    public function descargar(
        int $idArchivo
    ): ResponseInterface {
        try {
            if ($idArchivo <= 0) {
                return $this->response
                    ->setStatusCode(404)
                    ->setBody(
                        'Archivo no válido.'
                    );
            }

            $db = db_connect();

            $archivo = $db
                ->table(
                    'eventos_archivos_material'
                )
                ->select([
                    'id_archivo',
                    'nombre_original',
                    'tipo_mime',
                    'tamano_bytes',
                    'contenido',
                ])
                ->where(
                    'id_archivo',
                    $idArchivo
                )
                ->get()
                ->getRowArray();

            if (!$archivo) {
                return $this->response
                    ->setStatusCode(404)
                    ->setBody(
                        'El archivo solicitado no existe.'
                    );
            }

            $contenido =
                $archivo['contenido']
                ?? null;

            if (
                $contenido === null ||
                $contenido === ''
            ) {
                return $this->response
                    ->setStatusCode(404)
                    ->setBody(
                        'El archivo no tiene contenido disponible.'
                    );
            }

            /*
             * Sanear el nombre original
             * para la cabecera de descarga.
             */
            $nombreOriginal = basename(
                str_replace(
                    [
                        "\0",
                        "\r",
                        "\n",
                        '"',
                    ],
                    '',
                    (string) (
                        $archivo[
                            'nombre_original'
                        ]
                        ?? 'archivo'
                    )
                )
            );

            if ($nombreOriginal === '') {
                $nombreOriginal =
                    'archivo';
            }

            $mime = trim(
                (string) (
                    $archivo[
                        'tipo_mime'
                    ]
                    ?? ''
                )
            );

            if ($mime === '') {
                $mime =
                    'application/octet-stream';
            }

            return $this->response
                ->setStatusCode(200)
                ->setHeader(
                    'Content-Type',
                    $mime
                )
                ->setHeader(
                    'Content-Disposition',
                    'attachment; filename="'
                    . $nombreOriginal
                    . '"; filename*=UTF-8\'\''
                    . rawurlencode(
                        $nombreOriginal
                    )
                )
                ->setHeader(
                    'Content-Length',
                    (string) strlen(
                        $contenido
                    )
                )
                ->setHeader(
                    'X-Content-Type-Options',
                    'nosniff'
                )
                ->setHeader(
                    'Cache-Control',
                    'private, no-store, no-cache, must-revalidate'
                )
                ->setBody(
                    $contenido
                );
        } catch (Throwable $error) {
            log_message(
                'error',
                'Error al descargar archivo {archivo}: {mensaje} en {ruta}:{linea}',
                [
                    'archivo' =>
                        $idArchivo,

                    'mensaje' =>
                        $error->getMessage(),

                    'ruta' =>
                        $error->getFile(),

                    'linea' =>
                        $error->getLine(),
                ]
            );

            return $this->response
                ->setStatusCode(500)
                ->setBody(
                    'No fue posible descargar el archivo.'
                );
        }
    }
}
