<section class="general-section py-4" id="general">
    <div class="container">
        <h2 class="section-title">Información General</h2>

        <?php if (!empty($informacion_general)): ?>
            <div class="general-card mx-auto">
                <?php foreach ($informacion_general as $item): ?>
                    <div class="general-row">
                        <div class="general-label">
                            <?= esc($item['label']) ?>
                        </div>

                        <div class="general-value">
                            <?= esc($item['value']) ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>