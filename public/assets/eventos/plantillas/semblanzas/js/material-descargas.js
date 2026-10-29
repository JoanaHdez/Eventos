(function () {
    'use strict';

    const listaTarjetas =
        document.getElementById(
            'listaTarjetasPonentes'
        );

    const seccionTarjetas =
        document.getElementById(
            'seccionTarjetasPonentes'
        );

    const seccionMaterial =
        document.getElementById(
            'seccionMaterialPonente'
        );

    const botonVolver =
        document.getElementById(
            'botonVolverPonentes'
        );

    const nombrePonente =
        document.getElementById(
            'materialNombre'
        );

    const cargoPonente =
        document.getElementById(
            'materialCargo'
        );

    const fotoPonente =
        document.getElementById(
            'fotoPonente'
        );

    const archivosGuardados =
        document.getElementById(
            'materialArchivosGuardados'
        );

    const archivosCuerpo =
        document.getElementById(
            'materialArchivosCuerpo'
        );

    const totalArchivos =
        document.getElementById(
            'materialTotalArchivos'
        );

    const sinArchivos =
        document.getElementById(
            'materialSinArchivos'
        );

    const ponentes =
        Array.isArray(
            window.ponentesMaterial
        )
            ? window.ponentesMaterial
            : [];

    const archivosUrlBase =
        String(
            window.materialArchivosUrl ?? ''
        ).replace(/\/+$/, '');

    const descargaUrlBase =
        String(
            window.materialDescargaUrl ?? ''
        ).replace(/\/+$/, '');

    let controladorConsulta = null;

    function escaparHtml(texto) {
        const elemento =
            document.createElement('div');

        elemento.textContent =
            String(texto ?? '');

        return elemento.innerHTML;
    }

    function obtenerTamano(bytes) {
        const tamano =
            Number(bytes);

        if (
            !Number.isFinite(tamano) ||
            tamano < 0
        ) {
            return '—';
        }

        if (tamano === 0) {
            return '0 KB';
        }

        const mb =
            tamano / (1024 * 1024);

        if (mb >= 1) {
            return `${mb.toFixed(2)} MB`;
        }

        return `${Math.ceil(
            tamano / 1024
        )} KB`;
    }

    function formatearFecha(fecha) {
        if (!fecha) {
            return '—';
        }

        const fechaUtc =
            String(fecha)
                .trim()
                .replace(' ', 'T')
            + 'Z';

        const valor =
            new Date(fechaUtc);

        if (
            Number.isNaN(
                valor.getTime()
            )
        ) {
            return String(fecha);
        }

        return valor.toLocaleString(
            'es-MX',
            {
                timeZone:
                    'America/Mexico_City',

                dateStyle:
                    'medium',

                timeStyle:
                    'short'
            }
        );
    }

    function limpiarTabla() {
        archivosGuardados?.setAttribute(
            'hidden',
            ''
        );

        sinArchivos?.setAttribute(
            'hidden',
            ''
        );

        if (archivosCuerpo) {
            archivosCuerpo.innerHTML = '';
        }

        if (totalArchivos) {
            totalArchivos.textContent =
                '0 archivos';
        }
    }

    function mostrarTabla() {
        archivosGuardados?.removeAttribute(
            'hidden'
        );
    }

    function mostrarCargando() {
        mostrarTabla();

        sinArchivos?.setAttribute(
            'hidden',
            ''
        );

        if (totalArchivos) {
            totalArchivos.textContent =
                'Consultando...';
        }

        if (archivosCuerpo) {
            archivosCuerpo.innerHTML = `
                <tr>
                    <td colspan="5">
                        Consultando archivos...
                    </td>
                </tr>
            `;
        }
    }

    function mostrarSinArchivos() {
        mostrarTabla();

        if (archivosCuerpo) {
            archivosCuerpo.innerHTML = '';
        }

        if (totalArchivos) {
            totalArchivos.textContent =
                '0 archivos';
        }

        sinArchivos?.removeAttribute(
            'hidden'
        );
    }

    function mostrarErrorTabla(
        mensaje
    ) {
        mostrarTabla();

        sinArchivos?.setAttribute(
            'hidden',
            ''
        );

        if (totalArchivos) {
            totalArchivos.textContent =
                'Error';
        }

        if (archivosCuerpo) {
            archivosCuerpo.innerHTML = `
                <tr>
                    <td colspan="5">
                        ${escaparHtml(
                            mensaje ||
                            'No fue posible consultar los archivos.'
                        )}
                    </td>
                </tr>
            `;
        }
    }

    function crearUrlDescarga(
        idArchivo
    ) {
        if (
            descargaUrlBase === '' ||
            !idArchivo
        ) {
            return '#';
        }

        return `${descargaUrlBase}/${encodeURIComponent(
            idArchivo
        )}`;
    }

    function renderizarTabla(
        lista
    ) {
        mostrarTabla();

        if (!Array.isArray(lista)) {
            mostrarErrorTabla(
                'La lista de archivos no es válida.'
            );

            return;
        }

        if (totalArchivos) {
            totalArchivos.textContent =
                lista.length === 1
                    ? '1 archivo'
                    : `${lista.length} archivos`;
        }

        if (lista.length === 0) {
            mostrarSinArchivos();

            return;
        }

        sinArchivos?.setAttribute(
            'hidden',
            ''
        );

        if (!archivosCuerpo) {
            return;
        }

        archivosCuerpo.innerHTML =
            lista
                .map(
                    function (item) {
                        const idArchivo =
                            item.id_archivo ?? '';

                        const nombreOriginal =
                            item.nombre_original ??
                            'Archivo';

                        const extension =
                            item.extension
                                ? String(
                                    item.extension
                                ).toUpperCase()
                                : 'ARCHIVO';

                        const urlDescarga =
                            crearUrlDescarga(
                                idArchivo
                            );

                        return `
                            <tr>
                                <td>
                                    <span
                                        class="material-ponentes__archivo-nombre"
                                        title="${escaparHtml(
                                            nombreOriginal
                                        )}"
                                    >
                                        ${escaparHtml(
                                            nombreOriginal
                                        )}
                                    </span>
                                </td>

                                <td>
                                    ${escaparHtml(
                                        extension
                                    )}
                                </td>

                                <td>
                                    ${escaparHtml(
                                        obtenerTamano(
                                            item.tamano_bytes
                                        )
                                    )}
                                </td>

                                <td>
                                    ${escaparHtml(
                                        formatearFecha(
                                            item.created_at
                                        )
                                    )}
                                </td>

                                <td>
                                    <a
                                        class="material-ponentes__descargar"
                                        href="${escaparHtml(
                                            urlDescarga
                                        )}"
                                        aria-label="Descargar ${escaparHtml(
                                            nombreOriginal
                                        )}"
                                    >
                                        <i
                                            class="bi bi-download"
                                            aria-hidden="true"
                                        ></i>

                                        <span>
                                            Descargar
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        `;
                    }
                )
                .join('');
    }

    async function cargarArchivosGuardados(
        idPonente
    ) {
        if (!idPonente) {
            limpiarTabla();

            return;
        }

        if (archivosUrlBase === '') {
            mostrarErrorTabla(
                'No se configuró la ruta para consultar los archivos.'
            );

            console.error(
                'Falta definir window.materialArchivosUrl.'
            );

            return;
        }

        if (controladorConsulta) {
            controladorConsulta.abort();
        }

        controladorConsulta =
            new AbortController();

        mostrarCargando();

        try {
            const url =
                `${archivosUrlBase}/${encodeURIComponent(
                    idPonente
                )}`;

            const respuesta =
                await fetch(
                    url,
                    {
                        method: 'GET',

                        headers: {
                            'X-Requested-With':
                                'XMLHttpRequest',

                            Accept:
                                'application/json'
                        },

                        credentials:
                            'same-origin',

                        signal:
                            controladorConsulta.signal
                    }
                );

            const textoRespuesta =
                await respuesta.text();

            let resultado = null;

            try {
                resultado =
                    textoRespuesta
                        ? JSON.parse(
                            textoRespuesta
                        )
                        : null;
            } catch (errorJson) {
                console.error(
                    'Respuesta recibida:',
                    textoRespuesta
                );

                throw new Error(
                    'El servidor no devolvió una respuesta válida.'
                );
            }

            if (
                !respuesta.ok ||
                !resultado?.success
            ) {
                throw new Error(
                    resultado?.message ||
                    `No fue posible consultar los archivos. Código ${respuesta.status}.`
                );
            }

            renderizarTabla(
                Array.isArray(
                    resultado.archivos
                )
                    ? resultado.archivos
                    : []
            );
        } catch (errorConsulta) {
            if (
                errorConsulta.name ===
                'AbortError'
            ) {
                return;
            }

            console.error(
                'Error al consultar archivos:',
                errorConsulta
            );

            mostrarErrorTabla(
                errorConsulta.message ||
                'No fue posible consultar los archivos.'
            );
        }
    }

    function desmarcarTarjetas() {
        document
            .querySelectorAll(
                '.material-descargas__tarjeta--seleccionada'
            )
            .forEach(
                function (tarjeta) {
                    tarjeta.classList.remove(
                        'material-descargas__tarjeta--seleccionada'
                    );
                }
            );
    }

    function seleccionarPonente(
        ponente,
        tarjeta = null
    ) {
        if (!ponente) {
            console.error(
                'No se encontró el ponente seleccionado.'
            );

            return;
        }

        desmarcarTarjetas();

        tarjeta?.classList.add(
            'material-descargas__tarjeta--seleccionada'
        );

        if (nombrePonente) {
            nombrePonente.textContent =
                ponente.nombre_completo ??
                'Nombre del ponente';
        }

        if (cargoPonente) {
            cargoPonente.textContent =
                ponente.cargo ??
                'Cargo del ponente';
        }

        if (fotoPonente) {
            const imagen =
                String(
                    ponente.imagen ?? ''
                );

            if (imagen !== '') {
                fotoPonente.src =
                    imagen;

                fotoPonente.alt =
                    ponente.nombre_completo
                        ? `Fotografía de ${ponente.nombre_completo}`
                        : 'Fotografía del ponente';

                fotoPonente.removeAttribute(
                    'hidden'
                );
            } else {
                fotoPonente.src = '';
                fotoPonente.alt = '';

                fotoPonente.setAttribute(
                    'hidden',
                    ''
                );
            }
        }

        /*
         * Ocultar la cuadrícula de tarjetas.
         */
        seccionTarjetas?.setAttribute(
            'hidden',
            ''
        );

        /*
         * Mostrar únicamente el detalle.
         */
        seccionMaterial?.removeAttribute(
            'hidden'
        );

        mostrarCargando();

        cargarArchivosGuardados(
            ponente.id_ponente
        );

        window.setTimeout(
            function () {
                seccionMaterial
                    ?.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
            },
            100
        );
    }

    function volverATarjetas() {
        if (controladorConsulta) {
            controladorConsulta.abort();

            controladorConsulta = null;
        }

        limpiarTabla();
        desmarcarTarjetas();

        seccionMaterial?.setAttribute(
            'hidden',
            ''
        );

        seccionTarjetas?.removeAttribute(
            'hidden'
        );

        if (nombrePonente) {
            nombrePonente.textContent =
                'Nombre del ponente';
        }

        if (cargoPonente) {
            cargoPonente.textContent =
                'Cargo del ponente';
        }

        if (fotoPonente) {
            fotoPonente.src = '';
            fotoPonente.alt = '';

            fotoPonente.setAttribute(
                'hidden',
                ''
            );
        }

        window.setTimeout(
            function () {
                seccionTarjetas
                    ?.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
            },
            100
        );
    }

    listaTarjetas?.addEventListener(
        'click',
        function (evento) {
            const tarjeta =
                evento.target.closest(
                    '.material-descargas__tarjeta'
                );

            if (!tarjeta) {
                return;
            }

            const idSeleccionado =
                String(
                    tarjeta.dataset.id ?? ''
                );

            const ponente =
                ponentes.find(
                    function (item) {
                        return String(
                            item.id_ponente
                        ) === idSeleccionado;
                    }
                ) ?? null;

            if (!ponente) {
                console.error(
                    'No se encontró el ponente con ID:',
                    idSeleccionado
                );

                return;
            }

            seleccionarPonente(
                ponente,
                tarjeta
            );
        }
    );

    botonVolver?.addEventListener(
        'click',
        volverATarjetas
    );

    if (!listaTarjetas) {
        console.error(
            'No se encontró #listaTarjetasPonentes.'
        );
    }

    if (!seccionTarjetas) {
        console.error(
            'No se encontró #seccionTarjetasPonentes.'
        );
    }

    if (!seccionMaterial) {
        console.error(
            'No se encontró #seccionMaterialPonente.'
        );
    }

    if (!botonVolver) {
        console.error(
            'No se encontró #botonVolverPonentes.'
        );
    }

    if (!archivosGuardados) {
        console.error(
            'No se encontró #materialArchivosGuardados.'
        );
    }

    if (!archivosCuerpo) {
        console.error(
            'No se encontró #materialArchivosCuerpo.'
        );
    }

    if (archivosUrlBase === '') {
        console.error(
            'Falta definir window.materialArchivosUrl en index.php.'
        );
    }

    if (descargaUrlBase === '') {
        console.error(
            'Falta definir window.materialDescargaUrl en index.php.'
        );
    }
})();