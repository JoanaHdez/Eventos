<section class="programa-section py-4" id="programa">
    <div class="container">
        <div class="row g-4 justify-content-center">

            <div class="col-12 col-md-6 text-center">
                <h2 class="section-title">Programa</h2>

                <?php if (!empty($programa_imagen)): ?>
                    <img 
                        src="<?= base_url($programa_imagen) ?>" 
                        alt="Programa del congreso"
                        class="img-fluid programa-img"
                    >
                <?php endif; ?>
            </div>

            <div class="col-12 col-md-6 text-center">
                <h2 class="section-title">Ponentes</h2>

                <?php if (!empty($ponentes_imagen)): ?>
                    <img 
                        src="<?= base_url($ponentes_imagen) ?>" 
                        alt="Ponentes del congreso"
                        class="img-fluid programa-img"
                    >
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>