<?php

$ponenteActual = $ponentes[0] ?? [
    'nombre'         => 'Dra. María Fernanda López',
    'cargo'          => 'Especialista en Seguridad Pública',
    'pais'           => 'México',
    'pais_codigo'    => 'MX',

    'pais_gradiente' => 'linear-gradient(
        90deg,
        #006847 0%,
        #006847 33.33%,
        #ffffff 33.33%,
        #ffffff 66.66%,
        #ce1126 66.66%,
        #ce1126 100%
    )',

    'pais_contorno'  => '#ffffff',

    'imagen' => base_url(
        'assets/eventos/plantillas/semblanzas/img/ponente-ejemplo.png'
    ),
];

$paisTexto = mb_strtoupper(
    $ponenteActual['pais'] ?? 'Sin país',
    'UTF-8'
);

?>

<section id="visorSemblanza" class="semblanza-slide" style="
        --pais-gradiente: <?= esc($ponenteActual['pais_gradiente'], 'attr') ?>;
        --pais-contorno: <?= esc($ponenteActual['pais_contorno'], 'attr') ?>;
    ">

    <!-- Flecha anterior -->
    <button type="button" class="semblanza-flecha semblanza-flecha--anterior" id="btnAnterior"
        aria-label="Mostrar ponente anterior">
        &#8592;
    </button>

    <!-- Flecha siguiente -->
    <button type="button" class="semblanza-flecha semblanza-flecha--siguiente" id="btnSiguiente"
        aria-label="Mostrar siguiente ponente">
        &#8594;
    </button>

    <!-- País sólido detrás de la persona -->
    <div id="paisFondo" class="semblanza-slide__pais semblanza-slide__pais--fondo">
        <?= esc($paisTexto) ?>
    </div>

    <!-- Imagen del ponente -->
    <div id="contenedorImagenPonente" class="semblanza-slide__imagen">
        <img id="imagenPonente" src="<?= esc($ponenteActual['imagen'], 'attr') ?>"
            alt="Fotografía de <?= esc($ponenteActual['nombre'], 'attr') ?>" width="580" height="620"
            decoding="async" fetchpriority="high">
    </div>

    <!-- País con contorno delante de la persona -->
    <div id="paisContorno" class="semblanza-slide__pais semblanza-slide__pais--contorno" aria-hidden="true">
        <?= esc($paisTexto) ?>
    </div>

    <!-- Información izquierda -->
    <div class="semblanza-slide__info">
        <h2 id="nombrePonente">
            <?= esc($ponenteActual['nombre']) ?>
        </h2>

        <a href="#" id="btnSemblanza" class="semblanza-slide__boton" data-bs-toggle="modal"
            data-bs-target="#modalSemblanza">
            <span class="semblanza-slide__boton-texto">
                Ver semblanza
            </span>

            <span class="semblanza-slide__boton-icono" aria-hidden="true">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M13 5l7 7-7 7"></path>
                </svg>
            </span>
        </a>
    </div>

    <!-- Franja del cargo -->
    <div class="semblanza-slide__franja">
        <span id="cargoPonente" class="semblanza-slide__cargo">
            <?= esc($ponenteActual['cargo']) ?>
        </span>
    </div>
</section>

<?= view(
    'App\Modules\Eventos\Congresos\OctavoCongreso\Semblanzas\Views\sections\modal_semblanza'
) ?>

<?= view(
    'App\Modules\Eventos\Congresos\OctavoCongreso\Semblanzas\Views\sections\modal_login'
) ?>

<?= view(
    'App\Modules\Eventos\Congresos\OctavoCongreso\Semblanzas\Views\sections\modal_material'
) ?>

<script>
window.ponentesSemblanzas = <?= json_encode(
        $ponentes,
        JSON_UNESCAPED_UNICODE
        | JSON_UNESCAPED_SLASHES
        | JSON_HEX_TAG
        | JSON_HEX_AMP
        | JSON_HEX_APOS
        | JSON_HEX_QUOT
    ) ?>;
</script>
