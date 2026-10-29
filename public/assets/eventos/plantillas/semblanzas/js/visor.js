(function () {
    const ponentes = Array.isArray(window.ponentesSemblanzas)
        ? window.ponentesSemblanzas
        : [];

    if (ponentes.length === 0) {
        return;
    }

    /*
     * Elementos del visor.
     */
    const visor = document.getElementById('visorSemblanza');

    const btnAnterior = document.getElementById('btnAnterior');
    const btnSiguiente = document.getElementById('btnSiguiente');
    const btnSemblanza = document.getElementById('btnSemblanza');

    const paisFondo = document.getElementById('paisFondo');
    const paisContorno = document.getElementById('paisContorno');

    const imagenPonente = document.getElementById('imagenPonente');

    const contenedorImagenPonente = document.getElementById('contenedorImagenPonente');

    const nombrePonente = document.getElementById('nombrePonente');
    const cargoPonente = document.getElementById('cargoPonente');

    const buscadorPonentes = document.getElementById('buscadorPonentes');

    const filtroPais = document.getElementById('filtroPais');

    const filtroPaisPersonalizado = document.getElementById('filtroPaisPersonalizado');

    const filtroPaisBoton = document.getElementById('filtroPaisBoton');

    const filtroPaisMenu = document.getElementById('filtroPaisMenu');

    const filtroPaisTexto = document.getElementById('filtroPaisTexto');

    const opcionesPais = document.querySelectorAll('.filtro-pais__opcion');

    /*
     * Elementos del modal.
     */
    const modalSemblanzaContenido = document.getElementById('modalSemblanzaContenido');

    const modalSemblanzaImagen = document.getElementById('modalSemblanzaImagen');

    const modalSemblanzaPais = document.getElementById('modalSemblanzaPais');

    const modalSemblanzaInstitucion = document.getElementById('modalSemblanzaInstitucion');

    const modalSemblanzaTitulo = document.getElementById('modalSemblanzaTitulo');

    const modalSemblanzaCargo = document.getElementById('modalSemblanzaCargo');

    const modalSemblanzaTexto = document.getElementById('modalSemblanzaTexto');

    let indiceActual = 0;
    let bloqueoAnimacion = false;
    let ponentesFiltrados = [...ponentes];
    let temporizadorBusqueda = null;

    function textoSeguro(valor, respaldo = '') {
        return typeof valor === 'string' && valor.trim() !== ''
            ? valor.trim()
            : respaldo;
    }

    function normalizarTexto(valor) {
        return String(valor ?? '')
            .normalize('NFD')
            .replace(/[\u0300-\u036f]/g, '')
            .toLowerCase()
            .trim();
    }

    function normalizarIndice(indice) {
        if (ponentesFiltrados.length === 0) {
            return 0;
        }

        if (indice < 0) {
            return ponentesFiltrados.length - 1;
        }

        if (indice >= ponentesFiltrados.length) {
            return 0;
        }

        return indice;
    }

    function actualizarEstadoFlechas() {
        const ocultar = ponentesFiltrados.length <= 1;

        btnAnterior?.toggleAttribute('hidden', ocultar);

        btnSiguiente?.toggleAttribute('hidden', ocultar);
    }

    /* function aplicarImagenReducida(ponente) {
        if (!contenedorImagenPonente) {
            return;
        }

        contenedorImagenPonente.classList.toggle(
            'semblanza-slide__imagen--reducida',
            ponente.reducir_imagen === true
        );


        contenedorImagenPonente.classList.toggle(
            'semblanza-slide__imagen--arriba',
            ponente.subir_imagen === true
        );

        contenedorImagenPonente.classList.toggle(
            'semblanza-slide__imagen--grande',
            ponente.grande === true
        );

    }
 */

    function numeroSeguro(valor, respaldo = 1) {
        const numero = Number(valor);

        return Number.isFinite(numero)
            ? numero
            : respaldo;
    }

    function aplicarAjusteVisor(ponente) {
        if (!imagenPonente || !contenedorImagenPonente) {
            return;
        }

        const ajuste = ponente.ajuste_visor ?? {};

        const ancho = textoSeguro(ajuste.ancho);
        const alto = textoSeguro(ajuste.alto);

        if (ancho !== '') {
            contenedorImagenPonente.style.setProperty('width', ancho, 'important');
        } else {
            contenedorImagenPonente.style.removeProperty('width');
        }

        if (alto !== '') {
            contenedorImagenPonente.style.setProperty('height', alto, 'important');
        } else {
            contenedorImagenPonente.style.removeProperty('height');
        }

        imagenPonente.style.setProperty('object-fit', textoSeguro(
            ajuste.fit,
            'contain'
        ), 'important');

        imagenPonente.style.setProperty('object-position', textoSeguro(
            ajuste.posicion,
            'center bottom'
        ), 'important');

        const escala = numeroSeguro(
            ajuste.escala,
            1
        );

        const x = textoSeguro(
            ajuste.x,
            '0px'
        );

        const y = textoSeguro(
            ajuste.y,
            '0px'
        );
        imagenPonente.style.setProperty(
            'transform',
            'translate(' + x + ', ' + y + ') scale(' + escala + ')',
            'important'
        );

        imagenPonente.style.setProperty('transform-origin', textoSeguro(
            ajuste.origen,
            'center bottom'
        ), 'important');
    }

    function aplicarAjusteModal(ponente) {
        if (!modalSemblanzaImagen) {
            return;
        }

        const ajuste = ponente.ajuste_modal ?? {};

        const ancho = textoSeguro(ajuste.ancho);
        const alto = textoSeguro(ajuste.alto);

        if (ancho !== '') {
            modalSemblanzaImagen.style.setProperty('width', ancho, 'important');
        } else {
            modalSemblanzaImagen.style.removeProperty('width');
        }

        if (alto !== '') {
            modalSemblanzaImagen.style.setProperty('height', alto, 'important');
        } else {
            modalSemblanzaImagen.style.removeProperty('height');
        }

        modalSemblanzaImagen.style.setProperty('object-fit', textoSeguro(
            ajuste.fit,
            'contain'
        ), 'important');

        modalSemblanzaImagen.style.setProperty('object-position', textoSeguro(
            ajuste.posicion,
            'center top'
        ), 'important');

        const escala = numeroSeguro(
            ajuste.escala,
            1
        );

        const x = textoSeguro(
            ajuste.x,
            '0px'
        );

        const y = textoSeguro(
            ajuste.y,
            '0px'
        );
        modalSemblanzaImagen.style.setProperty(
            'transform',
            'translate(' + x + ', ' + y + ') scale(' + escala + ')',
            'important'
        );

        modalSemblanzaImagen.style.setProperty('transform-origin', textoSeguro(
            ajuste.origen,
            'center top'
        ), 'important');

        modalSemblanzaImagen.style.setProperty('margin-left', 'auto', 'important');
        modalSemblanzaImagen.style.setProperty('margin-right', 'auto', 'important');
    }

    function actualizarDatos(ponente, indice) {
        const pais = textoSeguro(
            ponente.pais,
            'Sin paÃ­s'
        ).toLocaleUpperCase('es-MX');

        paisFondo.textContent = pais;
        paisContorno.textContent = pais;

        nombrePonente.textContent = textoSeguro(
            ponente.nombre,
            'Nombre no disponible'
        );

        cargoPonente.textContent = textoSeguro(
            ponente.cargo,
            'Cargo no disponible'
        );

        visor.style.setProperty(
            '--pais-gradiente',
            textoSeguro(
                ponente.pais_gradiente,
                'linear-gradient(90deg, #245cc4, #8db8ff)'
            )
        );

        visor.style.setProperty(
            '--pais-contorno',
            textoSeguro(
                ponente.pais_contorno,
                '#ffffff'
            )
        );

        btnSemblanza.dataset.ponenteId = String(
            ponente.id ?? indice
        );
    }

    function mostrarSinResultados() {
        visor.classList.remove(
            'semblanza-slide--saliendo',
            'semblanza-slide--entrando-derecha',
            'semblanza-slide--entrando-izquierda'
        );

        paisFondo.textContent = '';
        paisContorno.textContent = '';

        nombrePonente.textContent =
            'No se encontraron ponentes';

        cargoPonente.textContent =
            'Prueba con otro nombre o selecciona otro paÃ­s.';

        imagenPonente.removeAttribute('src');
        imagenPonente.alt = '';

        contenedorImagenPonente?.style.removeProperty('width');
        contenedorImagenPonente?.style.removeProperty('height');

        imagenPonente.style.removeProperty('transform');
        imagenPonente.style.removeProperty('object-fit');
        imagenPonente.style.removeProperty('object-position');
        imagenPonente.style.removeProperty('transform-origin');

        btnSemblanza?.setAttribute('hidden', '');

        bloqueoAnimacion = false;
    }

    function iniciarEntrada(direccion) {
        visor.classList.remove(
            'semblanza-slide--saliendo'
        );

        visor.classList.add(
            direccion === 'anterior'
                ? 'semblanza-slide--entrando-izquierda'
                : 'semblanza-slide--entrando-derecha'
        );

        window.setTimeout(function () {
            visor.classList.remove(
                'semblanza-slide--entrando-derecha',
                'semblanza-slide--entrando-izquierda'
            );

            bloqueoAnimacion = false;
        }, 560);
    }

    function mostrarPonente(
        indice,
        direccion = 'siguiente'
    ) {
        if (
            bloqueoAnimacion
            || ponentesFiltrados.length === 0
        ) {
            return;
        }

        indice = normalizarIndice(indice);

        const ponente = ponentesFiltrados[indice];

        if (!ponente) {
            return;
        }

        bloqueoAnimacion = true;

        visor.classList.remove(
            'semblanza-slide--entrando-derecha',
            'semblanza-slide--entrando-izquierda'
        );

        visor.classList.add(
            'semblanza-slide--saliendo'
        );

        window.setTimeout(function () {
            const nuevaRutaImagen = textoSeguro(
                ponente.imagen
            );

            actualizarDatos(
                ponente,
                indice
            );

            /* const finalizarCambio = function () {
                aplicarImagenReducida(ponente);

                imagenPonente.alt = textoSeguro(
                    ponente.nombre,
                    'FotografÃ­a del ponente'
                );

                indiceActual = indice;

                requestAnimationFrame(function () {
                    iniciarEntrada(direccion);
                });
            }; */

            const finalizarCambio = function () {
                aplicarAjusteVisor(ponente);

                imagenPonente.alt = textoSeguro(
                    ponente.nombre,
                    'FotografÃ­a del ponente'
                );

                indiceActual = indice;

                requestAnimationFrame(function () {
                    iniciarEntrada(direccion);
                });
            };

            if (nuevaRutaImagen === '') {
                imagenPonente.removeAttribute('src');
                finalizarCambio();
                return;
            }

            const imagenPrecargada = new Image();

            imagenPrecargada.onload = function () {
                imagenPonente.src = nuevaRutaImagen;
                finalizarCambio();
            };

            imagenPrecargada.onerror = function () {
                imagenPonente.removeAttribute('src');
                finalizarCambio();
            };

            imagenPrecargada.src = nuevaRutaImagen;
        }, 430);
    }

    function filtrarPonentes() {
        const textoBusqueda = normalizarTexto(
            buscadorPonentes?.value
        );

        const paisSeleccionado = normalizarTexto(
            filtroPais?.value
        );

        ponentesFiltrados = ponentes.filter(
            function (ponente) {
                const coincideTexto =
                    textoBusqueda === ''
                    || normalizarTexto(
                        ponente.nombre
                    ).includes(textoBusqueda)
                    || normalizarTexto(
                        ponente.cargo
                    ).includes(textoBusqueda)
                    || normalizarTexto(
                        ponente.institucion
                    ).includes(textoBusqueda)
                    || normalizarTexto(
                        ponente.pais
                    ).includes(textoBusqueda);

                const coincidePais =
                    paisSeleccionado === ''
                    || normalizarTexto(
                        ponente.pais
                    ) === paisSeleccionado;

                return coincideTexto && coincidePais;
            }
        );

        indiceActual = 0;
        bloqueoAnimacion = false;

        actualizarEstadoFlechas();

        if (ponentesFiltrados.length === 0) {
            mostrarSinResultados();
            return;
        }

        btnSemblanza?.removeAttribute(
            'hidden'
        );

        mostrarPonente(
            0,
            'siguiente'
        );
    }

    /*
     * Cargar informaciÃ³n del ponente activo en el modal.
     */
function cargarModalSemblanza() {
    const idPonente = String(
        btnSemblanza?.dataset.ponenteId ?? ''
    );

    const ponente = ponentes.find(function (item) {
        return String(item.id) === idPonente;
    });

    if (!ponente) {
        return;
    }

    const pais = textoSeguro(
        ponente.pais,
        'Sin paÃ­s'
    ).toLocaleUpperCase('es-MX');

    if (modalSemblanzaPais) {
        modalSemblanzaPais.textContent = pais;

        modalSemblanzaPais.style.setProperty(
            '--modal-pais-gradiente',
            textoSeguro(
                ponente.pais_gradiente,
                'linear-gradient(90deg, #245cc4, #8db8ff)'
            )
        );

        modalSemblanzaPais.style.setProperty(
            '--modal-pais-contorno',
            textoSeguro(
                ponente.pais_contorno,
                '#ffffff'
            )
        );
    }

    if (modalSemblanzaTitulo) {
        modalSemblanzaTitulo.textContent = textoSeguro(
            ponente.nombre,
            'Nombre no disponible'
        );
    }

    if (modalSemblanzaCargo) {
        modalSemblanzaCargo.textContent = textoSeguro(
            ponente.cargo,
            'Cargo no disponible'
        );
    }

    if (modalSemblanzaInstitucion) {
        modalSemblanzaInstitucion.textContent = textoSeguro(
            ponente.institucion,
            'InstituciÃ³n no disponible'
        );
    }

    if (modalSemblanzaTexto) {
        modalSemblanzaTexto.textContent = textoSeguro(
            ponente.semblanza,
            'Semblanza no disponible'
        );
    }

    if (modalSemblanzaImagen) {
        const rutaImagen = textoSeguro(
            ponente.imagen
        );

        if (rutaImagen !== '') {
            modalSemblanzaImagen.src = rutaImagen;
        } else {
            modalSemblanzaImagen.removeAttribute('src');
        }

        modalSemblanzaImagen.alt = textoSeguro(
            ponente.nombre,
            'FotografÃ­a del ponente'
        );

        aplicarAjusteModal(ponente);
    }
}
    /*
     * Dropdown personalizado.
     */
    function cerrarFiltroPais() {
    filtroPaisMenu?.setAttribute(
        'hidden',
        ''
    );

    filtroPaisBoton?.setAttribute(
        'aria-expanded',
        'false'
    );

    filtroPaisPersonalizado?.classList.remove(
        'is-open'
    );
}

function abrirFiltroPais() {
    filtroPaisMenu?.removeAttribute(
        'hidden'
    );

    filtroPaisBoton?.setAttribute(
        'aria-expanded',
        'true'
    );

    filtroPaisPersonalizado?.classList.add(
        'is-open'
    );
}

function alternarFiltroPais() {
    const estaAbierto =
        filtroPaisBoton?.getAttribute(
            'aria-expanded'
        ) === 'true';

    if (estaAbierto) {
        cerrarFiltroPais();
    } else {
        abrirFiltroPais();
    }
}

/*
 * Eventos de navegaciÃ³n.
 */
btnAnterior?.addEventListener(
    'click',
    function () {
        mostrarPonente(
            indiceActual - 1,
            'anterior'
        );
    }
);

btnSiguiente?.addEventListener(
    'click',
    function () {
        mostrarPonente(
            indiceActual + 1,
            'siguiente'
        );
    }
);

/*
 * Abrir el modal con la informaciÃ³n correcta.
 */
btnSemblanza?.addEventListener(
    'click',
    function () {
        cargarModalSemblanza();
    }
);

/*
 * Buscador.
 */
buscadorPonentes?.addEventListener(
    'input',
    function () {
        window.clearTimeout(
            temporizadorBusqueda
        );

        temporizadorBusqueda = window.setTimeout(
            function () {
                filtrarPonentes();
            },
            300
        );
    }
);

buscadorPonentes?.addEventListener(
    'search',
    function () {
        window.clearTimeout(
            temporizadorBusqueda
        );

        filtrarPonentes();
    }
);

/*
 * Abrir y cerrar filtro.
 */
filtroPaisBoton?.addEventListener(
    'click',
    function () {
        alternarFiltroPais();
    }
);

/*
 * Seleccionar paÃ­s.
 */
opcionesPais.forEach(function (opcion) {
    opcion.addEventListener(
        'click',
        function () {
            const valor =
                opcion.dataset.value ?? '';

            const texto =
                opcion.textContent.trim();

            if (filtroPais) {
                filtroPais.value = valor;
            }

            if (filtroPaisTexto) {
                filtroPaisTexto.textContent = texto;
            }

            opcionesPais.forEach(
                function (elemento) {
                    const activa =
                        elemento === opcion;

                    elemento.classList.toggle(
                        'is-active',
                        activa
                    );

                    elemento.setAttribute(
                        'aria-selected',
                        String(activa)
                    );
                }
            );

            cerrarFiltroPais();
            filtrarPonentes();
        }
    );
});

/*
 * Cerrar filtro al hacer clic fuera.
 */
document.addEventListener(
    'click',
    function (evento) {
        if (
            filtroPaisPersonalizado
            && !filtroPaisPersonalizado.contains(
                evento.target
            )
        ) {
            cerrarFiltroPais();
        }
    }
);

/*
 * Cerrar filtro con Escape.
 */
document.addEventListener(
    'keydown',
    function (evento) {
        if (evento.key === 'Escape') {
            cerrarFiltroPais();
        }
    }
);

actualizarEstadoFlechas();

const primerPonente =
    ponentesFiltrados[0];

/* if (primerPonente) {
    aplicarImagenReducida(
        primerPonente
    );

    btnSemblanza.dataset.ponenteId =
        String(primerPonente.id ?? 0);
} */

if (primerPonente) {
    aplicarAjusteVisor(
        primerPonente
    );

    btnSemblanza.dataset.ponenteId =
        String(primerPonente.id ?? 0);
}
}) ();


