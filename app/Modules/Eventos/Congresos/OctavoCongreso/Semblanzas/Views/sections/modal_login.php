<div class="modal fade ponente-login-modal" id="modalLoginPonente" tabindex="-1"
    aria-labelledby="modalLoginPonenteTitulo" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content ponente-login-modal__contenido">

            <button type="button" class="ponente-login-modal__cerrar" data-bs-dismiss="modal" aria-label="Cerrar">
                ×
            </button>

            <div class="ponente-login-modal__encabezado">

                <span class="ponente-login-modal__etiqueta">
                    Acceso exclusivo
                </span>

                <h2 id="modalLoginPonenteTitulo">
                    Acceso para ponentes
                </h2>

                <p>
                    Ingresa tus datos para continuar con la carga de material.
                </p>

            </div>

            <form id="formLoginPonente" class="ponente-login-modal__formulario" autocomplete="off" data-login-url="<?= base_url('eventos/login') ?>">

                <div class="ponente-login-modal__campo">

                    <label for="usuarioPonente">
                        Usuario
                    </label>

                    <div class="ponente-login-modal__input">

                        <svg viewBox="0 0 24 24" width="19" height="19" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M20 21a8 8 0 0 0-16 0"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>

                        <input id="usuarioPonente" name="usuario" type="text" placeholder="Ingresa tu usuario" required>

                    </div>

                </div>

                <div class="ponente-login-modal__campo">

                    <label for="contrasenaPonente">
                        Contraseña
                    </label>

                    <div class="ponente-login-modal__input">

                        <svg viewBox="0 0 24 24" width="19" height="19" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>

                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>

                        <input id="contrasenaPonente" name="contrasena" type="password"
                            placeholder="Ingresa tu contraseña" required>

                        <button type="button" id="btnMostrarContrasena" class="ponente-login-modal__mostrar"
                            aria-label="Mostrar contraseña">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path
                                    d="M2.06 12.35a1 1 0 0 1 0-.7C3.73 7.6 7.55 5 12 5c4.45 0 8.27 2.6 9.94 6.65a1 1 0 0 1 0 .7C20.27 16.4 16.45 19 12 19c-4.45 0-8.27-2.6-9.94-6.65Z">
                                </path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                        </button>

                    </div>

                </div>

                <p id="mensajeLoginPonente" class="ponente-login-modal__mensaje" hidden>
                    Usuario o contraseña incorrectos.
                </p>

                <button type="submit" class="ponente-login-modal__boton">
                    <span>
                        Iniciar sesión
                    </span>

                    <svg viewBox="0 0 24 24" width="19" height="19" fill="none" stroke="currentColor" stroke-width="2.5"
                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M5 12h14"></path>
                        <path d="m13 5 7 7-7 7"></path>
                    </svg>
                </button>

            </form>

        </div>

    </div>
</div>

