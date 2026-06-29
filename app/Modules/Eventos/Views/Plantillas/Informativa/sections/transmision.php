<section class="transmision-section" id="transmisiones">
    <h2 class="section-title">Transmisiones</h2>

    <div class="video-principal mb-3">
        <div class="ratio ratio-16x9">
            <iframe 
                src="<?= esc($video_principal ?? '') ?>" 
                title="Transmisión principal"
                allowfullscreen>
            </iframe>
        </div>
    </div>

    <p class="video-titulo text-center">
        <?= esc($video_titulo ?? '1° Congreso Internacional de Seguridad y Proximidad Social') ?>
    </p>

    <?php if (!empty($videos_secundarios)): ?>
        <div class="row g-3 mt-3">
            <?php foreach ($videos_secundarios as $video): ?>
                <div class="col-12 col-md-6">
                    <div class="ratio ratio-16x9">
                        <iframe 
                            src="<?= esc($video['url']) ?>" 
                            title="<?= esc($video['titulo']) ?>"
                            allowfullscreen>
                        </iframe>
                    </div>
                    <p class="video-titulo-secundario">
                        <?= esc($video['titulo']) ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>