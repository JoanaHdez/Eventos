<section class="actividad-section py-4" id="actividades">
    <div class="container">
        <div class="row g-4 align-items-start">

            <div class="col-12 col-lg-8">
                <h2 class="section-title">Actividades</h2>

                <?php if (!empty($actividades)): ?>
                    <ul class="actividad-lista">
                        <?php foreach ($actividades as $actividad): ?>
                            <li>
                                <strong><?= esc($actividad['titulo']) ?></strong>

                                <?php if (!empty($actividad['descripcion'])): ?>
                                    <p><?= esc($actividad['descripcion']) ?></p>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>

            <div class="col-12 col-lg-4 text-center">
                <?php if (!empty($actividad_imagen)): ?>
                    <img 
                        src="<?= base_url($actividad_imagen) ?>" 
                        alt="Actividades del congreso"
                        class="img-fluid actividad-img"
                    >
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>