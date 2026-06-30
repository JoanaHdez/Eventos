<?php if (!empty($personas_destacadas)): ?>
<section class="personas-section mt-4" id="personas-destacadas">
    <h2 class="section-title">Personas destacadas</h2>

    <div class="row g-4 justify-content-center">
        <?php foreach ($personas_destacadas as $persona): ?>
            <div class="col-12 col-sm-6 col-lg-3 text-center">
                <h3 class="persona-cargo">
                    <?= esc($persona['cargo']) ?>
                </h3>

                <?php if (!empty($persona['imagen'])): ?>
                    <img
                        src="<?= base_url($persona['imagen']) ?>"
                        alt="<?= esc($persona['nombre']) ?>"
                        class="img-fluid persona-img"
                    >
                <?php endif; ?>

                <h4 class="persona-nombre">
                    <?= esc($persona['nombre']) ?>
                </h4>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>