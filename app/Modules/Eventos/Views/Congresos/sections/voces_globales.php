<body>

    <main>

        <section id="programa" class="voces-globales">
            <div class="container">

                <div class="vg-slider">

                    <div class="vg-views">

                        <div class="vg-view active">

                            <div class="vg-left">
                                <img class="vg-modal-img" src="<?= base_url('assets/img/hero15.png') ?>"
                                    data-pdf="<?= base_url('assets/pdf/Ponentes.pdf') ?>" alt="Ponentes">
                            </div>

                            <div class="vg-right">

                                <div class="vg-texto">
                                    <h2>Voces Globales</h2>
                                    <p>
                                        "M&aacute;s de 40 l&iacute;deres de opini&oacute;n, investigadores de prestigio
                                        internacional y operadores
                                        del sistema de justicia reunidos en un solo lugar para aportar ciencia, datos y
                                        experiencia
                                        en la transformaci&oacute;n de la seguridad ciudadana."
                                    </p>

                                    <a href="<?= base_url('assets/pdf/Ponentes.pdf') ?>" class="btn-descargar" download>
                                        Descargar
                                        <span>&darr;</span>
                                    </a>
                                </div>

                                <div class="vg-programa">
                                    <div class="programa-link">
                                        <span>Programa</span>
                                    </div>

                                    <img src="<?= base_url('assets/img/hero16.png') ?>" alt="Programa">
                                </div>

                                <div class="vg-dots">
                                    <button class="vg-dot active" data-index="0"></button>
                                    <button class="vg-dot" data-index="1"></button>
                                </div>

                            </div>

                        </div>

                        <div class="vg-view">

                            <div class="vg-left">
                                <img class="vg-modal-img" src="<?= base_url('assets/img/hero16.png') ?>"
                                    data-pdf="<?= base_url('assets/pdf/Programa.pdf') ?>" alt="Programa Académico">
                            </div>

                            <div class="vg-right">

                                <div class="vg-texto">
                                    <h2>Programa Acad&eacute;mico</h2>
                                    <p>
                                        "Conferencias, paneles y mesas de trabajo dise&ntilde;adas para compartir
                                        experiencias,
                                        estrategias y herramientas para la seguridad ciudadana."
                                    </p>

                                    <a href="<?= base_url('assets/pdf/Programa.pdf') ?>" class="btn-descargar" download>
                                        Descargar
                                        <span>&darr;</span>
                                    </a>
                                </div>

                                <div class="vg-programa">
                                    <div class="programa-link">
                                        <span>Programa</span>
                                    </div>

                                    <img src="<?= base_url('assets/img/hero15.png') ?>" alt="Ponentes">
                                </div>

                                <div class="vg-dots">
                                    <button class="vg-dot active" data-index="0"></button>
                                    <button class="vg-dot" data-index="1"></button>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section>

    </main>
    </main>

    <div class="vg-modal" id="vg-modal">

        <div class="vg-modal-content">

            <button class="vg-modal-close" type="button">
                &times;
            </button>

            <img id="vg-modal-image" src="" alt="Vista previa">

            <a id="vg-modal-download" class="btn-descargar" href="#" download>
                Descargar
                <span>&darr;</span>
            </a>

        </div>

    </div>
    <script src="<?= base_url('assets/js/voces_globales.js') ?>"></script>
</body>

</html>