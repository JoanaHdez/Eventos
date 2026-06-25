<body>

    <main>

        <section id="programa" class="voces-globales">
            <div class="container">

                <div class="vg-slider">

                    <div class="vg-slide active"
    data-left="<?= base_url('assets/img/hero15.png') ?>"
    data-programa="<?= base_url('assets/img/hero16.png') ?>"
    data-descarga="<?= base_url('assets/pdf/Ponentes.pdf') ?>"
    data-titulo="Voces Globales"
                        data-texto='"Más de 40 líderes de opinión, investigadores de prestigio internacional y operadores del sistema de justicia reunidos en un solo lugar para aportar ciencia, datos y experiencia en la transformación de la seguridad ciudadana."'>
                    </div>

                    <div class="vg-slide"
    data-left="<?= base_url('assets/img/hero16.png') ?>"
    data-programa="<?= base_url('assets/img/hero15.png') ?>"
    data-descarga="<?= base_url('assets/pdf/Programa.pdf') ?>"
    data-titulo="Programa Académico"
                        data-texto='"Conferencias, paneles y mesas de trabajo diseñadas para compartir experiencias, estrategias y herramientas para la seguridad ciudadana."'>
                    </div>

                </div>

                <div class="vg-grid">

                    <div class="vg-left">
                        <img id="vg-left-img" src="<?= base_url('assets/img/hero15.png') ?>" alt="Ponentes">
                    </div>

                    <div class="vg-right">

                        <div class="vg-texto">
                            <h2 id="vg-titulo">Voces Globales</h2>
                            <p id="vg-texto">
                                "Más de 40 líderes de opinión, investigadores de prestigio internacional y operadores
                                del sistema de justicia reunidos en un solo lugar para aportar ciencia, datos y
                                experiencia
                                en la transformación de la seguridad ciudadana."
                            </p>

                            <a id="vg-descargar" href="<?= base_url('assets/pdf/hero15.pdf') ?>" class="btn-descargar"
                                download>
                                Descargar
                                <span>↓</span>
                            </a>
                        </div>

                        <div class="vg-programa">
                            <div class="programa-link">
                                <span>Programa</span>
                            </div>

                            <img id="vg-programa-img" src="<?= base_url('assets/img/hero16.png') ?>" alt="Programa">
                        </div>

                        <div class="vg-dots">
                            <button class="vg-dot active" data-index="0"></button>
                            <button class="vg-dot" data-index="1"></button>
                        </div>

                    </div>

                </div>

            </div>
        </section>

    </main>
    <script src="<?= base_url('assets/js/voces_globales.js') ?>"></script>
</body>

</html>