<section class="semblanzas-tools">

    <div class="container">

        <div class="tools-grid">

            <div class="semblanzas-search">

                <i class="bi bi-search"></i>

                <input id="buscadorPonentes" type="search" class="semblanzas-input" placeholder="Buscar ponente..."
                    autocomplete="off">

            </div>

            <div class="filtro-pais" id="filtroPaisPersonalizado">

    <button
        type="button"
        class="filtro-pais__boton"
        id="filtroPaisBoton"
        aria-haspopup="listbox"
        aria-expanded="false"
    >
        <span id="filtroPaisTexto">
            Todos los países
        </span>

        <span class="filtro-pais__flecha" aria-hidden="true">
            <svg
                viewBox="0 0 24 24"
                width="18"
                height="18"
                fill="none"
                stroke="currentColor"
                stroke-width="2.4"
                stroke-linecap="round"
                stroke-linejoin="round"
            >
                <path d="m6 9 6 6 6-6"></path>
            </svg>
        </span>
    </button>

    <div
        class="filtro-pais__menu"
        id="filtroPaisMenu"
        role="listbox"
        aria-label="Filtrar ponentes por país"
        hidden
    >
        <button
            type="button"
            class="filtro-pais__opcion is-active"
            data-value=""
            role="option"
            aria-selected="true"
        >
            Todos los países
        </button>

        <?php foreach (($paises ?? []) as $pais): ?>
            <button
                type="button"
                class="filtro-pais__opcion"
                data-value="<?= esc($pais, 'attr') ?>"
                role="option"
                aria-selected="false"
            >
                <?= esc($pais) ?>
            </button>
        <?php endforeach; ?>
    </div>

    <input
        type="hidden"
        id="filtroPais"
        value=""
    >

</div>

        </div>

    </div>

</section>