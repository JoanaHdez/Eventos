<div class="hero-wrapper position-relative">

    <section class="hero-informativa position-relative" id="inicio">

        <div class="hero-carousel">
            <?php foreach (($hero_imagenes ?? []) as $index => $imagen): ?>
            <div class="hero-slide <?= $index === 0 ? 'active' : '' ?>"
                style="background-image: url('<?= base_url($imagen) ?>');">
            </div>
            <?php endforeach; ?>
        </div>

        <div class="hero-overlay"></div>

        <div class="container-fluid h-100 position-relative">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-7 offset-lg-5 text-center text-lg-end hero-content">
                    <h1><?= esc($titulo) ?></h1>

                    <p class="hero-fecha">
                        <?= esc($fecha) ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="hero-lugar">
            <?= esc($lugar) ?>
        </div>
    </section>

    <?php
$menuItems = [
    [
        'label' => 'Inicio',
        'href' => '#inicio',
        'show' => true,
    ],
    [
        'label' => 'Transmisiones',
        'href' => '#transmisiones',
        'show' => !empty($video_principal) || !empty($videos_secundarios),
    ],
    [
        'label' => 'Objetivo',
        'href' => '#objetivo',
        'show' => !empty($objetivo),
    ],
    [
        'label' => 'Temática',
        'href' => '#tematica',
        'show' => !empty($tematica_intro) || !empty($tematicas),
    ],
    [
        'label' => 'Personas Destacadas',
        'href' => '#personas-destacadas',
        'show' => !empty($personas_destacadas),
    ],
    [
        'label' => 'Actividades',
        'href' => '#actividades',
        'show' => !empty($actividades),
    ],
    [
        'label' => 'Galería',
        'href' => '#galeria',
        'show' => !empty($galeria),
    ],
    [
        'label' => 'Programa / Ponentes',
        'href' => '#programa',
        'show' => !empty($programa_imagen) || !empty($ponentes_imagen),
    ],
    [
        'label' => 'Legado',
        'href' => '#legado',
        'show' => !empty($legado),
    ],
    [
        'label' => 'Información General',
        'href' => '#general',
        'show' => !empty($informacion_general),
    ],
    [
        'label' => 'Contactos',
        'href' => '#footer',
        'show' => true,
    ],
];
?>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm hero-menu">
    <div class="container-fluid justify-content-center">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuInformativa">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="menuInformativa">
            <ul class="navbar-nav text-center">
                <?php foreach ($menuItems as $item): ?>
                <?php if ($item['show']): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= esc($item['href']) ?>">
                        <?= esc($item['label']) ?>
                    </a>
                </li>
                <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>

<script src="<?= base_url('assets/eventos/plantillas/informativa/js/hero.js') ?>"></script>