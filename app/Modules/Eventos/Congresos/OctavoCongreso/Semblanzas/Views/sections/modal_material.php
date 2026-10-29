<div
    class="modal fade material-modal"
    id="modalMaterialPonente"
    tabindex="-1"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content material-modal__contenido">

            <button
                type="button"
                class="material-modal__cerrar"
                data-bs-dismiss="modal"
                aria-label="Cerrar"
            >
                &times;
            </button>

            <div class="material-modal__header">

                <span class="material-modal__etiqueta">
                    Carga de material
                </span>

                <h2 id="materialNombre">
                    Nombre del ponente
                </h2>

                <p id="materialCargo">
                    Cargo del ponente
                </p>

            </div>

            <form
                id="formMaterialPonente"
                enctype="multipart/form-data"
                data-upload-url="<?= base_url('eventos/material/subir') ?>"
            >

                <label
                    class="material-modal__dropzone"
                    for="archivoMaterial"
                >

                    <input
                        id="archivoMaterial"
                        name="archivos[]"
                        type="file"
                        hidden
                        multiple
                    >

                    <div class="material-modal__icono">

                        <i class="bi bi-cloud-arrow-up"></i>

                    </div>

                    <h4>
                        Arrastra aquí tu material
                    </h4>

                    <span>
                        o selecciona uno o varios archivos
                    </span>

                    <button
                        type="button"
                        class="material-modal__seleccionar"
                    >
                        Seleccionar archivo
                    </button>

                </label>

                <div
                    id="materialArchivoSeleccionado"
                    class="material-modal__archivo"
                    hidden
                >
                </div>

                <small class="material-modal__formatos">
                    Puedes seleccionar archivos de cualquier tipo.
                </small>

                <button
                    class="material-modal__subir"
                    type="submit"
                >
                    Guardar material
                </button>

            </form>

            <!-- Alerta de éxito -->
            <div
                id="materialExito"
                class="material-modal__resultado material-modal__resultado--exito"
                hidden
                role="status"
                aria-live="polite"
            >
                <div
                    class="material-modal__resultado-icono"
                    aria-hidden="true"
                >
                    <svg
                        viewBox="0 0 24 24"
                        width="54"
                        height="54"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2.2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
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

            <!-- Alerta de error -->
            <div
                id="materialError"
                class="material-modal__resultado material-modal__resultado--error"
                hidden
                role="alert"
                aria-live="assertive"
            >
                <div
                    class="material-modal__resultado-icono"
                    aria-hidden="true"
                >
                    <svg
                        viewBox="0 0 24 24"
                        width="54"
                        height="54"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2.2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M15 9 9 15"></path>
                        <path d="m9 9 6 6"></path>
                    </svg>
                </div>

                <h3>
                    No se pudieron enviar los archivos
                </h3>

                <p id="materialErrorMensaje">
                    Intenta nuevamente.
                </p>
            </div>

        </div>

    </div>
</div>