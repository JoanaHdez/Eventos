<?php if (!empty($personas_destacadas)): ?>
<section class="personas-section mt-4" id="personas-destacadas">
    <h2 class="section-title">Personas destacadas</h2>

    <div class="row g-4 justify-content-center">
        <?php foreach ($personas_destacadas as $persona): ?>
            <div class="col-12 col-sm-6 col-lg-3">
                <article class="persona-card text-center">
                    <?php if (!empty($persona['imagen'])): ?>
                        <div class="persona-img-wrap">
                            <img 
                                src="<?= base_url($persona['imagen']) ?>" 
                                alt="<?= esc($persona['nombre']) ?>"
                                class="persona-img"
                            >
                        </div>
                    <?php endif; ?>

                    <div class="persona-info">
                        <h4 class="persona-nombre">
                            <?= esc($persona['nombre']) ?>
                        </h4>

                        <p class="persona-cargo">
                            <?= esc($persona['cargo']) ?>
                        </p>
                    </div>
                </article>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>