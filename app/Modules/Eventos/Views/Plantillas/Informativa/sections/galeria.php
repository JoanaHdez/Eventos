<section class="galeria-section py-4" id="galeria">
    <div class="container">
        <h2 class="section-title">Galería</h2>

        <?php if (!empty($galeria)): ?>
            <div class="galeria-grid">
                <?php foreach ($galeria as $imagen): ?>
                    <div class="galeria-item galeria-<?= esc($imagen['tipo'] ?? 'normal') ?>">
                        <img
                            src="<?= base_url($imagen['src']) ?>"
                            alt="<?= esc($imagen['alt'] ?? 'Imagen de galería') ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>