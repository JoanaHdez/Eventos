<?php
$totalVideos = 0;

if (!empty($video_principal)) {
    $totalVideos++;
}

if (!empty($videos_secundarios)) {
    $totalVideos += count($videos_secundarios);
}

$tieneVideos = $totalVideos > 0;
$muchosVideos = $totalVideos > 2;
?>

<section class="bloque-contenido py-4" id="contenido">
    <div class="container">

        <?php if ($tieneVideos && !$muchosVideos): ?>
            <div class="row g-4">
                <div class="col-12 col-lg-6">
                    <?= view('App\Modules\Eventos\Views\Plantillas\Informativa\sections\transmision') ?>
                </div>

                <div class="col-12 col-lg-6">
                    <?= view('App\Modules\Eventos\Views\Plantillas\Informativa\sections\objetivo') ?>
                    <?= view('App\Modules\Eventos\Views\Plantillas\Informativa\sections\tematica') ?>
                </div>
            </div>
        <?php else: ?>
            <div class="row g-4">
                <div class="col-12">
                    <?= view('App\Modules\Eventos\Views\Plantillas\Informativa\sections\objetivo') ?>
                    <?= view('App\Modules\Eventos\Views\Plantillas\Informativa\sections\tematica') ?>
                </div>

                <?php if ($tieneVideos): ?>
                    <div class="col-12">
                        <?= view('App\Modules\Eventos\Views\Plantillas\Informativa\sections\transmision') ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?= view('App\Modules\Eventos\Views\Plantillas\Informativa\sections\personas_destacadas') ?>

    </div>
</section>