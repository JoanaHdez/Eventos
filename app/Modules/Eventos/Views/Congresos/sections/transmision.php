<body>

    <main>

        <section id="transmisiones" class="transmision">

            <div class="container-fluid px-5">

                <h2 class="text-center">Transmisiones</h2>

                <div class="transmision-container">

                    <div class="transmision-slider">

                        <div class="video-card active">
                            <div class="video-wrapper">
                                <iframe src="https://www.youtube.com/embed/zWzrdmFpmVQ" allowfullscreen></iframe>
                            </div>

                            <h3 class="video-titulo">28 de agosto de 2025</h3>
                        </div>

                        <div class="video-card">
                            <div class="video-wrapper">
                                <iframe src="https://www.youtube.com/embed/VIDEO2" allowfullscreen></iframe>
                            </div>

                            <h3 class="video-titulo">29 de agosto de 2025</h3>
                        </div>

                    </div>

                    <div class="transmision-dots">
                        <button class="dot active" data-index="0"></button>
                        <button class="dot" data-index="1"></button>
                    </div>

                </div>

            </div>

        </section>

    </main>
    <script src="<?= base_url('assets/js/transmision.js') ?>"></script>
</body>

</html>