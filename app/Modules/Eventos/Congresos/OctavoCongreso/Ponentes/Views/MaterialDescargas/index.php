<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Descarga de material de ponentes
    </title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <link
        rel="stylesheet"
        href="<?= base_url(
            'assets/eventos/plantillas/semblanzas/css/material-ponentes.css'
        ) ?>"
    >
</head>

<body>

    <main class="material-ponentes">

        <section class="material-ponentes__contenedor">

            <header class="material-ponentes__encabezado">

                <span class="material-ponentes__etiqueta">
                    Consulta de material
                </span>

                <h1>
                    Descarga de archivos
                </h1>

                <p>
                    Selecciona un ponente para consultar y descargar
                    los archivos registrados.
                </p>

            </header>

            <!-- =====================================================
                 TARJETAS DE PONENTES
                 ===================================================== -->

            <section
                id="seccionTarjetasPonentes"
                class="material-descargas__ponentes"
            >

                <div class="material-descargas__encabezado-lista">

                    <span class="material-ponentes__etiqueta">
                        Ponentes
                    </span>

                    <h2>
                        Selecciona un ponente
                    </h2>

                    <p>
                        Haz clic sobre un ponente para consultar y descargar
                        su material. Las tarjetas verdes indican que ya
                        registró archivos.
                    </p>

                </div>

                <div
                    id="listaTarjetasPonentes"
                    class="material-descargas__tarjetas"
                >

                    <?php foreach (($ponentes ?? []) as $ponente): ?>

                        <?php
                        $idPonente = (int) (
                            $ponente['id_ponente'] ?? 0
                        );

                        $nombreCompleto = (string) (
                            $ponente['nombre_completo'] ?? ''
                        );

                        $cargo = (string) (
                            $ponente['cargo'] ?? ''
                        );

                        $imagen = (string) (
                            $ponente['imagen'] ?? ''
                        );

                        $cantidadArchivos = (int) (
                            $ponente['total_archivos'] ?? 0
                        );

                        $claseTarjeta =
                            'material-descargas__tarjeta';

                        if ($cantidadArchivos > 0) {
                            $claseTarjeta .=
                                ' material-descargas__tarjeta--con-archivos';
                        }
                        ?>

                        <button
                            type="button"
                            class="<?= esc($claseTarjeta) ?>"
                            data-id="<?= $idPonente ?>"
                            aria-label="Consultar archivos de <?= esc(
                                $nombreCompleto
                            ) ?>"
                        >

                            <span class="material-descargas__tarjeta-foto">

                                <?php if ($imagen !== ''): ?>

                                    <img
                                        src="<?= esc($imagen) ?>"
                                        alt=""
                                        loading="lazy"
                                    >

                                <?php else: ?>

                                    <i
                                        class="bi bi-person"
                                        aria-hidden="true"
                                    ></i>

                                <?php endif; ?>

                            </span>

                            <span class="material-descargas__tarjeta-info">

                                <strong>
                                    <?= esc($nombreCompleto) ?>
                                </strong>

                                <span>
                                    <?= esc($cargo) ?>
                                </span>

                                <?php if ($cantidadArchivos > 0): ?>

                                    <small>

                                        <i
                                            class="bi bi-check-circle-fill"
                                            aria-hidden="true"
                                        ></i>

                                        <?= $cantidadArchivos === 1
                                            ? '1 archivo'
                                            : $cantidadArchivos . ' archivos' ?>

                                    </small>

                                <?php endif; ?>

                            </span>

                        </button>

                    <?php endforeach; ?>

                </div>

            </section>

            <!-- =====================================================
                 DETALLE DEL PONENTE Y ARCHIVOS
                 ===================================================== -->

            <section
                id="seccionMaterialPonente"
                class="material-ponentes__panel"
                hidden
            >

                <button
                    id="botonVolverPonentes"
                    class="material-descargas__volver"
                    type="button"
                >

                    <i
                        class="bi bi-arrow-left"
                        aria-hidden="true"
                    ></i>

                    <span>
                        Volver a ponentes
                    </span>

                </button>

                <div class="material-ponentes__perfil">

                    <div class="material-ponentes__foto">

                        <img
                            id="fotoPonente"
                            src=""
                            alt=""
                            hidden
                        >

                    </div>

                    <div class="material-ponentes__perfil-info">

                        <span>
                            Ponente seleccionado
                        </span>

                        <h2 id="materialNombre">
                            Nombre del ponente
                        </h2>

                        <p id="materialCargo">
                            Cargo del ponente
                        </p>

                    </div>

                </div>

                <section
                    id="materialArchivosGuardados"
                    class="material-ponentes__archivos-guardados"
                    hidden
                >

                    <div class="material-ponentes__archivos-encabezado">

                        <div>

                            <span class="material-ponentes__etiqueta">
                                Material registrado
                            </span>

                            <h3>
                                Archivos cargados anteriormente
                            </h3>

                        </div>

                        <span id="materialTotalArchivos">
                            0 archivos
                        </span>

                    </div>

                    <div class="material-ponentes__tabla-contenedor">

                        <table class="material-ponentes__tabla">

                            <thead>

                                <tr>
                                    <th>Archivo</th>
                                    <th>Tipo</th>
                                    <th>Tamaño</th>
                                    <th>Fecha</th>
                                    <th>Descargar</th>
                                </tr>

                            </thead>

                            <tbody id="materialArchivosCuerpo">
                            </tbody>

                        </table>

                    </div>

                    <p
                        id="materialSinArchivos"
                        class="material-ponentes__sin-archivos"
                        hidden
                    >
                        Este ponente todavía no tiene archivos registrados.
                    </p>

                </section>

            </section>

        </section>

    </main>

    <script>
        window.ponentesMaterial = <?= json_encode(
            $ponentes ?? [],
            JSON_UNESCAPED_UNICODE |
            JSON_UNESCAPED_SLASHES |
            JSON_HEX_TAG |
            JSON_HEX_AMP |
            JSON_HEX_APOS |
            JSON_HEX_QUOT
        ) ?>;

        window.materialArchivosUrl = <?= json_encode(
            base_url('eventos/material/archivos')
        ) ?>;

        window.materialDescargaUrl = <?= json_encode(
            base_url('eventos/material/descargar')
        ) ?>;
    </script>

    <script
        src="<?= base_url(
            'assets/eventos/plantillas/semblanzas/js/material-descargas.js?v='
            . time()
        ) ?>"
    ></script>

</body>

</html>