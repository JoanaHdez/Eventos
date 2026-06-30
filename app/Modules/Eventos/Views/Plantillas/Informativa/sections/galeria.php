<section class="galeria-section py-4" id="galeria">
    <div class="container">
        <h2 class="section-title">Galería</h2>

        <?php if (!empty($galeria)): ?>
            <div class="galeria-grid">
                <?php foreach ($galeria as $index => $imagen): ?>
                    <div class="galeria-item <?= !empty($imagen['grande']) ? 'galeria-item-grande' : '' ?>">
                        <img 
                            src="<?= base_url($imagen['src']) ?>" 
                            alt="<?= esc($imagen['alt'] ?? 'Imagen de galería') ?>"
                            class="img-fluid"
                        >
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>