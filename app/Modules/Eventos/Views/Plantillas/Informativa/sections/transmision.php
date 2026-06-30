<?php
$videos = [];

if (!empty($video_principal)) {
    $videos[] = [
        'titulo' => $video_titulo ?? 'Transmisión principal',
        'url' => $video_principal,
    ];
}

if (!empty($videos_secundarios)) {
    foreach ($videos_secundarios as $video) {
        if (!empty($video['url'])) {
            $videos[] = [
                'titulo' => $video['titulo'] ?? 'Transmisión',
                'url' => $video['url'],
            ];
        }
    }
}
?>

<?php if (!empty($videos)): ?>
<section class="transmision-section" id="transmisiones">
    <h2 class="section-title">Transmisiones</h2>

    <div class="row g-3">
        <?php foreach ($videos as $index => $video): ?>
            <div class="<?= $index === 0 ? 'col-12' : 'col-12 col-md-6' ?>">
                <div class="ratio ratio-16x9 video-frame">
                    <iframe
                        src="<?= esc($video['url']) ?>"
                        title="<?= esc($video['titulo']) ?>"
                        allowfullscreen>
                    </iframe>
                </div>

                <p class="<?= $index === 0 ? 'video-titulo' : 'video-titulo-secundario' ?> text-center">
                    <?= esc($video['titulo']) ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>