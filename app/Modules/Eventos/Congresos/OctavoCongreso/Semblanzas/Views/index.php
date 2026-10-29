<?= view('App\Modules\Eventos\Congresos\OctavoCongreso\Semblanzas\Views\layouts\header') ?>

<main>

    <section class="semblanzas-bloque">

        <?= $this->include(
            'App\Modules\Eventos\Congresos\OctavoCongreso\Semblanzas\Views\sections\encabezado'
        ) ?>

        <?= $this->include(
            'App\Modules\Eventos\Congresos\OctavoCongreso\Semblanzas\Views\sections\herramientas'
        ) ?>

        <?= $this->include(
            'App\Modules\Eventos\Congresos\OctavoCongreso\Semblanzas\Views\sections\visor'
        ) ?>

    </section>

</main>

<?= view('App\Modules\Eventos\Congresos\OctavoCongreso\Semblanzas\Views\layouts\footer') ?>
