<section class="intro-congreso py-4">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-12 col-md-4 text-center">
                <img 
                    src="<?= base_url($logo_congreso ?? 'assets/eventos/plantillas/informativa/img/logo-congreso.png') ?>" 
                    alt="<?= esc($titulo ?? 'Congreso') ?>" 
                    class="img-fluid intro-logo"
                >
            </div>

            <div class="col-12 col-md-8">
                <p class="intro-texto">
                    <?= esc($intro ?? 'Texto introductorio de ejemplo del congreso.') ?>
                </p>
            </div>
        </div>
    </div>
</section>