<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Carga de material para ponentes
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="<?= base_url(
            'assets/eventos/plantillas/semblanzas/css/material-ponentes.css'
        ) ?>">
</head>

<body>

    <main class="material-ponentes">

        <section class="material-ponentes__contenedor">

            <header class="material-ponentes__encabezado">

                <span class="material-ponentes__etiqueta">
                    Acceso para ponentes
                </span>

                <h1>
                    Carga de material
                </h1>

                <p>
                    Busca y selecciona tu nombre para agregar los archivos
                    correspondientes a tu participación.
                </p>

            </header>

            <div class="material-ponentes__buscador">

                <label for="buscarPonente">
                    Selecciona tu nombre
                </label>

                <div class="material-ponentes__buscador-control">

                    <i class="bi bi-search" aria-hidden="true"></i>

                    <input id="buscarPonente" type="text" placeholder="Escribe tu nombre..." autocomplete="off"
                        aria-autocomplete="list" aria-controls="listaPonentesPersonalizada" aria-expanded="false">

                </div>

                <div id="listaPonentesPersonalizada" class="material-ponentes__lista" hidden>
                </div>

                <p id="mensajeSeleccionPonente" class="material-ponentes__mensaje" hidden>
                    Selecciona un nombre válido de la lista.
                </p>

            </div>

            <section id="seccionMaterialPonente" class="material-ponentes__panel" hidden>

                <div class="material-ponentes__perfil">

                    <div class="material-ponentes__foto">

                        <img id="fotoPonente" src="" alt="" hidden>

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

                <form id="formMaterialPonente" enctype="multipart/form-data" data-upload-url="<?= base_url(
                        'eventos/material/subir'
                    ) ?>" data-files-url="<?= base_url(
                        'eventos/material/archivos'
                    ) ?>">

                    <input id="idPonente" name="id_ponente" type="hidden" value="">

                    <label class="material-modal__dropzone" for="archivoMaterial">

                        <input id="archivoMaterial" name="archivos[]" type="file"
                            accept=".pdf,.docx,.xlsx,.pptx,.jpg,.jpeg,.png,.mp4,.mp3" hidden multiple>

                        <div class="material-modal__icono">

                            <i class="bi bi-cloud-arrow-up" aria-hidden="true"></i>

                        </div>

                        <h4>
                            Arrastra aquí tu material
                        </h4>

                        <span>
                            o selecciona uno o varios archivos
                        </span>

                        <button type="button" class="material-modal__seleccionar">
                            Seleccionar archivo
                        </button>

                    </label>

                    <div id="materialArchivoSeleccionado" class="material-modal__archivo" hidden>
                    </div>

                    <small class="material-modal__formatos">
                        Formatos permitidos:
                        PDF, DOCX, XLSX, PPTX, JPG, JPEG, PNG, MP4 y MP3.
                    </small>

                    <button class="material-modal__subir" type="submit">
                        Guardar material
                    </button>

                </form>

                <section id="materialArchivosGuardados" class="material-ponentes__archivos-guardados" hidden>

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
                                </tr>
                            </thead>

                            <tbody id="materialArchivosCuerpo">
                            </tbody>

                        </table>

                    </div>

                    <p id="materialSinArchivos" class="material-ponentes__sin-archivos" hidden>
                        Todavía no hay archivos registrados.
                    </p>

                </section>

                <div id="materialExito" class="material-modal__resultado material-modal__resultado--exito" hidden
                    role="status" aria-live="polite">

                    <div class="material-modal__resultado-icono" aria-hidden="true">

                        <svg viewBox="0 0 24 24" width="54" height="54" fill="none" stroke="currentColor"
                            stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="m8 12 2.7 2.7L16.5 9"></path>
                        </svg>

                    </div>

                    <h3>
                        Material guardado correctamente
                    </h3>

                    <p>
                        Puedes volver más tarde para agregar más archivos.
                    </p>

                </div>

                <div id="materialError" class="material-modal__resultado material-modal__resultado--error" hidden
                    role="alert" aria-live="assertive">

                    <div class="material-modal__resultado-icono" aria-hidden="true">

                        <svg viewBox="0 0 24 24" width="54" height="54" fill="none" stroke="currentColor"
                            stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M15 9 9 15"></path>
                            <path d="m9 9 6 6"></path>
                        </svg>

                    </div>

                    <h3 id="materialErrorTitulo">
                        Algunos archivos no se guardaron
                    </h3>

                    <p id="materialErrorMensaje">
                        Revisa los archivos seleccionados.
                    </p>

                </div>

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
    </script>

    <script src="<?= base_url(
            'assets/eventos/plantillas/semblanzas/js/material-ponente.js?v='
            . time()
        ) ?>"></script>

</body>

</html>