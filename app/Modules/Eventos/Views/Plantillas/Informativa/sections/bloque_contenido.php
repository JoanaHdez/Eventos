<?php
$tieneVideos = !empty($video_principal) || !empty($videos_secundarios);
?>

<section class="bloque-contenido py-4" id="contenido">
    <div class="container">
        <div class="row g-4">

            <?php if ($tieneVideos): ?>
                <div class="col-12 col-lg-6">
                    <?= view('App\Modules\Eventos\Views\Plantillas\Informativa\sections\transmision') ?>
                </div>

                <div class="col-12 col-lg-6">
                    <?= view('App\Modules\Eventos\Views\Plantillas\Informativa\sections\objetivo') ?>
                    <?= view('App\Modules\Eventos\Views\Plantillas\Informativa\sections\tematica') ?>
                </div>
            <?php else: ?>
                <div class="col-12">
                    <?= view('App\Modules\Eventos\Views\Plantillas\Informativa\sections\objetivo') ?>
                    <?= view('App\Modules\Eventos\Views\Plantillas\Informativa\sections\tematica') ?>
                </div>
            <?php endif; ?>

        </div>

        <?= view('App\Modules\Eventos\Views\Plantillas\Informativa\sections\personas_destacadas') ?>
    </div>
</section>