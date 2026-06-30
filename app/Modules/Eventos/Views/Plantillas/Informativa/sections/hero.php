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

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm hero-menu">
    <div class="container-fluid justify-content-center">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuInformativa">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="menuInformativa">
            <ul class="navbar-nav text-center">
                <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="#transmisiones">Transmisiones</a></li>
                <li class="nav-item"><a class="nav-link" href="#objetivo">Objetivo</a></li>
                <li class="nav-item"><a class="nav-link" href="#tematica">Temática</a></li>
                <li class="nav-item"><a class="nav-link" href="#personas-destacadas">Personas Destacadas</a></li>
                <li class="nav-item"><a class="nav-link" href="#actividades">Actividades</a></li>
                <li class="nav-item"><a class="nav-link" href="#galeria">Galería</a></li>
                <li class="nav-item"><a class="nav-link" href="#programa">Programa / Ponentes</a></li>
                <li class="nav-item"><a class="nav-link" href="#legado">Legado</a></li>
                <li class="nav-item"><a class="nav-link" href="#general">Información General</a></li>
                <li class="nav-item"><a class="nav-link" href="#footer">Contactos</a></li>
            </ul>
        </div>
    </div>
</nav>

<script src="<?= base_url('assets/eventos/plantillas/informativa/js/hero.js') ?>"></script>