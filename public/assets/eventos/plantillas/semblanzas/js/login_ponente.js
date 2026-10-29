(function () {

    const btnMostrarContrasena =
        document.getElementById(
            'btnMostrarContrasena'
        );

    const contrasenaPonente =
        document.getElementById(
            'contrasenaPonente'
        );

    const formLoginPonente =
        document.getElementById(
            'formLoginPonente'
        );

    const mensajeLoginPonente =
        document.getElementById(
            'mensajeLoginPonente'
        );

    const modalLoginElemento =
        document.getElementById(
            'modalLoginPonente'
        );

    const modalMaterialElemento =
        document.getElementById(
            'modalMaterialPonente'
        );

    const botonEnviar =
        formLoginPonente?.querySelector(
            'button[type="submit"]'
        );

    /*
     * Mostrar mensaje de error.
     */
    function mostrarMensaje(texto) {

        if (!mensajeLoginPonente) {
            return;
        }

        mensajeLoginPonente.textContent = texto;
        mensajeLoginPonente.removeAttribute(
            'hidden'
        );

    }

    /*
     * Ocultar mensaje de error.
     */
    function ocultarMensaje() {

        if (!mensajeLoginPonente) {
            return;
        }

        mensajeLoginPonente.textContent = '';
        mensajeLoginPonente.setAttribute(
            'hidden',
            ''
        );

    }

    /*
     * Restaurar el botón del formulario.
     */
    function restaurarBoton(
        contenidoOriginal
    ) {

        if (!botonEnviar) {
            return;
        }

        botonEnviar.disabled = false;
        botonEnviar.innerHTML =
            contenidoOriginal;

    }

    /*
     * Mostrar / ocultar contraseña.
     */
    btnMostrarContrasena?.addEventListener(
        'click',
        function () {

            if (!contrasenaPonente) {
                return;
            }

            const mostrar =
                contrasenaPonente.type ===
                'password';

            contrasenaPonente.type =
                mostrar
                    ? 'text'
                    : 'password';

            btnMostrarContrasena.setAttribute(
                'aria-label',
                mostrar
                    ? 'Ocultar contraseña'
                    : 'Mostrar contraseña'
            );

        }
    );

    /*
     * Limpiar errores cuando el usuario
     * vuelva a escribir.
     */
    formLoginPonente
        ?.querySelectorAll('input')
        .forEach(function (input) {

            input.addEventListener(
                'input',
                ocultarMensaje
            );

        });

    /*
     * Inicio de sesión real.
     */
    formLoginPonente?.addEventListener(
        'submit',
        async function (evento) {

            evento.preventDefault();

            ocultarMensaje();

            /*
             * Ejecutar validaciones HTML.
             */
            if (
                !formLoginPonente
                    .checkValidity()
            ) {

                formLoginPonente
                    .reportValidity();

                return;

            }

            /*
             * La URL debe venir en:
             *
             * data-login-url="..."
             */
            const loginUrl =
                formLoginPonente.dataset
                    .loginUrl;

            if (!loginUrl) {

                mostrarMensaje(
                    'No se configuró la ruta de inicio de sesión.'
                );

                return;

            }

            const contenidoOriginal =
                botonEnviar?.innerHTML ?? '';

            try {

                if (botonEnviar) {

                    botonEnviar.disabled = true;

                    botonEnviar.innerHTML =
                        '<span>Validando...</span>';

                }

                /*
                 * FormData incluye usuario,
                 * contraseña y el token CSRF
                 * si está dentro del formulario.
                 */
                const datosFormulario =
                    new FormData(
                        formLoginPonente
                    );

                const respuesta =
                    await fetch(
                        loginUrl,
                        {
                            method: 'POST',

                            body:
                                datosFormulario,

                            headers: {
                                'X-Requested-With':
                                    'XMLHttpRequest',

                                'Accept':
                                    'application/json'
                            },

                            credentials:
                                'same-origin'
                        }
                    );

                let resultado;

                try {

                    resultado =
                        await respuesta.json();

                } catch (error) {

                    throw new Error(
                        'El servidor no devolvió una respuesta válida.'
                    );

                }

                if (
                    !respuesta.ok ||
                    !resultado.success
                ) {

                    mostrarMensaje(
                        resultado.message ??
                        'Usuario o contraseña incorrectos.'
                    );

                    return;

                }

                /*
                 * Datos devueltos por el backend.
                 */
                const datosPonente = {
                    id:
                        resultado.ponente
                            ?.id ?? null,

                    nombre:
                        resultado.ponente
                            ?.nombre ?? '',

                    cargo:
                        resultado.ponente
                            ?.cargo ?? ''
                };

                /*
                 * Enviar los datos al modal
                 * de carga de material.
                 */
                document.dispatchEvent(
                    new CustomEvent(
                        'ponenteAutenticado',
                        {
                            detail:
                                datosPonente
                        }
                    )
                );

                formLoginPonente.reset();
                ocultarMensaje();

                /*
                 * Cerrar modal de login.
                 */
                if (
                    modalLoginElemento &&
                    typeof bootstrap !==
                        'undefined'
                ) {

                    const modalLogin =
                        bootstrap.Modal
                            .getOrCreateInstance(
                                modalLoginElemento
                            );

                    modalLogin.hide();

                }

                /*
                 * Abrir modal de carga.
                 */
                if (
                    modalMaterialElemento &&
                    typeof bootstrap !==
                        'undefined'
                ) {

                    const modalMaterial =
                        bootstrap.Modal
                            .getOrCreateInstance(
                                modalMaterialElemento
                            );

                    setTimeout(
                        function () {

                            modalMaterial.show();

                        },
                        300
                    );

                }

            } catch (error) {

                console.error(
                    'Error al iniciar sesión:',
                    error
                );

                mostrarMensaje(
                    error.message ??
                    'No fue posible comunicarse con el servidor.'
                );

            } finally {

                restaurarBoton(
                    contenidoOriginal
                );

            }

        }
    );

    /*
     * Limpiar el formulario cuando
     * se cierre el modal.
     */
    modalLoginElemento?.addEventListener(
        'hidden.bs.modal',
        function () {

            formLoginPonente?.reset();
            ocultarMensaje();

            if (contrasenaPonente) {
                contrasenaPonente.type =
                    'password';
            }

            btnMostrarContrasena
                ?.setAttribute(
                    'aria-label',
                    'Mostrar contraseña'
                );

        }
    );

})();