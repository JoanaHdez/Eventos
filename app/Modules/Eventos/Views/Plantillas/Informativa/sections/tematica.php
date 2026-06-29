<section class="tematica-section" id="tematica">
    <h2 class="section-title">Temática de la Edición</h2>

    <p class="texto-general">
        <?= esc($tematica_intro ?? 'Esta edición estuvo enfocada en el análisis de:') ?>
    </p>

    <?php if (!empty($tematicas)): ?>
        <ul class="lista-tematica">
            <?php foreach ($tematicas as $tema): ?>
                <li><?= esc($tema) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?php if (!empty($personas_destacadas)): ?>
        <div class="row g-3 mt-4">
            <?php foreach ($personas_destacadas as $persona): ?>
                <div class="col-12 col-md-6 text-center">
                    <img 
                        src="<?= base_url($persona['imagen']) ?>" 
                        alt="<?= esc($persona['nombre']) ?>" 
                        class="img-fluid persona-img"
                    >

                    <h3 class="persona-nombre">
                        <?= esc($persona['nombre']) ?>
                    </h3>

                    <p class="persona-cargo">
                        <?= esc($persona['cargo']) ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>