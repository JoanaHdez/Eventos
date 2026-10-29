(function () {
    'use strict';

    const buscador =
        document.getElementById('buscarPonente');

    const listaPonentes =
        document.getElementById(
            'listaPonentesPersonalizada'
        );

    const mensajeSeleccion =
        document.getElementById(
            'mensajeSeleccionPonente'
        );

    const seccionMaterial =
        document.getElementById(
            'seccionMaterialPonente'
        );

    const idPonente =
        document.getElementById('idPonente');

    const nombrePonente =
        document.getElementById(
            'materialNombre'
        );

    const cargoPonente =
        document.getElementById(
            'materialCargo'
        );

    const fotoPonente =
        document.getElementById(
            'fotoPonente'
        );

    const archivo =
        document.getElementById(
            'archivoMaterial'
        );

    const listadoArchivos =
        document.getElementById(
            'materialArchivoSeleccionado'
        );

    const formulario =
        document.getElementById(
            'formMaterialPonente'
        );

    const exito =
        document.getElementById(
            'materialExito'
        );

    const error =
        document.getElementById(
            'materialError'
        );

    const errorTitulo =
        document.getElementById(
            'materialErrorTitulo'
        );

    const errorMensaje =
        document.getElementById(
            'materialErrorMensaje'
        );

    const botonSeleccionar =
        document.querySelector(
            '.material-modal__seleccionar'
        );

    const botonSubir =
        formulario?.querySelector(
            'button[type="submit"]'
        );

    const archivosGuardados =
        document.getElementById(
            'materialArchivosGuardados'
        );

    const archivosCuerpo =
        document.getElementById(
            'materialArchivosCuerpo'
        );

    const totalArchivos =
        document.getElementById(
            'materialTotalArchivos'
        );

    const sinArchivos =
        document.getElementById(
            'materialSinArchivos'
        );

    const ponentes =
        Array.isArray(window.ponentesMaterial)
            ? window.ponentesMaterial
            : [];

    let archivosSeleccionados = [];
    let temporizadorResultado = null;

    function normalizarTexto(texto) {
        return String(texto ?? '')
            .trim()
            .normalize('NFD')
            .replace(
                /[\u0300-\u036f]/g,
                ''
            )
            .toLocaleLowerCase('es-MX');
    }

    function escaparHtml(texto) {
        const elemento =
            document.createElement('div');

        elemento.textContent =
            String(texto ?? '');

        return elemento.innerHTML;
    }

    function obtenerTamano(bytes) {
        const tamano = Number(bytes);

        if (
            !Number.isFinite(tamano) ||
            tamano < 0
        ) {
            return '';
        }

        if (tamano === 0) {
            return '0 KB';
        }

        const mb =
            tamano / (1024 * 1024);

        if (mb >= 1) {
            return `${mb.toFixed(1)} MB`;
        }

        return `${Math.ceil(
            tamano / 1024
        )} KB`;
    }

    function obtenerExtension(
        nombreArchivo
    ) {
        const partes =
            String(nombreArchivo)
                .split('.');

        if (partes.length < 2) {
            return 'ARCHIVO';
        }

        return partes
            .pop()
            .toUpperCase();
    }

    function formatearFecha(fecha) {
        if (!fecha) {
            return '—';
        }

        const fechaUtc =
            String(fecha)
                .trim()
                .replace(' ', 'T')
            + 'Z';

        const valor =
            new Date(fechaUtc);

        if (
            Number.isNaN(
                valor.getTime()
            )
        ) {
            return String(fecha);
        }

        return valor.toLocaleString(
            'es-MX',
            {
                timeZone:
                    'America/Mexico_City',
                dateStyle:
                    'medium',
                timeStyle:
                    'short'
            }
        );
    }

    function ocultarMensajeSeleccion() {
        mensajeSeleccion?.setAttribute(
            'hidden',
            ''
        );
    }

    function mostrarMensajeSeleccion() {
        mensajeSeleccion?.removeAttribute(
            'hidden'
        );
    }

    function ocultarResultados() {
        formulario?.removeAttribute(
            'hidden'
        );

        exito?.setAttribute(
            'hidden',
            ''
        );

        error?.setAttribute(
            'hidden',
            ''
        );
    }

    function cerrarListaPonentes() {
        listaPonentes?.setAttribute(
            'hidden',
            ''
        );

        buscador?.setAttribute(
            'aria-expanded',
            'false'
        );
    }

    function abrirListaPonentes() {
        listaPonentes?.removeAttribute(
            'hidden'
        );

        buscador?.setAttribute(
            'aria-expanded',
            'true'
        );
    }

    function renderizarListaPonentes(
        termino = ''
    ) {
        if (!listaPonentes) {
            return;
        }

        const terminoNormalizado =
            normalizarTexto(termino);

        const coincidencias =
            ponentes.filter(
                function (ponente) {
                    const nombre =
                        normalizarTexto(
                            ponente.nombre_completo
                        );

                    const cargo =
                        normalizarTexto(
                            ponente.cargo
                        );

                    return (
                        terminoNormalizado === '' ||
                        nombre.includes(
                            terminoNormalizado
                        ) ||
                        cargo.includes(
                            terminoNormalizado
                        )
                    );
                }
            );

        if (coincidencias.length === 0) {
            listaPonentes.innerHTML = `
                <p class="material-ponentes__lista-vacia">
                    No se encontraron ponentes.
                </p>
            `;

            abrirListaPonentes();

            return;
        }

        listaPonentes.innerHTML =
            coincidencias
                .map(function (ponente) {
                    const idSeguro =
                        escaparHtml(
                            ponente.id_ponente
                        );

                    const nombreSeguro =
                        escaparHtml(
                            ponente.nombre_completo
                        );

                    const cargoSeguro =
                        escaparHtml(
                            ponente.cargo ?? ''
                        );

                    const imagenSegura =
                        escaparHtml(
                            ponente.imagen ?? ''
                        );

                    const imagenHtml =
                        imagenSegura !== ''
                            ? `
                                <img
                                    src="${imagenSegura}"
                                    alt=""
                                    loading="lazy"
                                >
                            `
                            : `
                                <i
                                    class="bi bi-person"
                                    aria-hidden="true"
                                ></i>
                            `;

                    return `
                        <button
                            type="button"
                            class="material-ponentes__opcion"
                            data-id="${idSeguro}"
                        >
                            <span class="material-ponentes__opcion-foto">
                                ${imagenHtml}
                            </span>

                            <span class="material-ponentes__opcion-info">
                                <strong>
                                    ${nombreSeguro}
                                </strong>

                                <span>
                                    ${cargoSeguro}
                                </span>
                            </span>
                        </button>
                    `;
                })
                .join('');

        abrirListaPonentes();
    }

    function limpiarArchivosGuardados() {
        archivosGuardados?.setAttribute(
            'hidden',
            ''
        );

        sinArchivos?.setAttribute(
            'hidden',
            ''
        );

        if (archivosCuerpo) {
            archivosCuerpo.innerHTML = '';
        }

        if (totalArchivos) {
            totalArchivos.textContent =
                '0 archivos';
        }
    }

    async function cargarArchivosGuardados(
        idPonenteSeleccionado
    ) {
        const baseUrl =
            formulario?.dataset.filesUrl;

        if (
            !baseUrl ||
            !idPonenteSeleccionado
        ) {
            limpiarArchivosGuardados();

            return;
        }

        try {
            const url =
                `${baseUrl}/${encodeURIComponent(
                    idPonenteSeleccionado
                )}`;

            const respuesta =
                await fetch(
                    url,
                    {
                        method: 'GET',

                        headers: {
                            'X-Requested-With':
                                'XMLHttpRequest',

                            Accept:
                                'application/json'
                        },

                        credentials:
                            'same-origin'
                    }
                );

            const textoRespuesta =
                await respuesta.text();

            let resultado = null;

            try {
                resultado =
                    textoRespuesta
                        ? JSON.parse(
                            textoRespuesta
                        )
                        : null;
            } catch (errorJson) {
                console.error(
                    'Respuesta no válida al consultar archivos:',
                    textoRespuesta
                );

                throw new Error(
                    'El servidor no devolvió una respuesta válida al consultar los archivos.'
                );
            }

            if (
                !respuesta.ok ||
                !resultado?.success
            ) {
                throw new Error(
                    resultado?.message ||
                    'No fue posible consultar los archivos guardados.'
                );
            }

            const lista =
                Array.isArray(
                    resultado.archivos
                )
                    ? resultado.archivos
                    : [];

            archivosGuardados
                ?.removeAttribute(
                    'hidden'
                );

            if (totalArchivos) {
                totalArchivos.textContent =
                    lista.length === 1
                        ? '1 archivo'
                        : `${lista.length} archivos`;
            }

            if (lista.length === 0) {
                sinArchivos
                    ?.removeAttribute(
                        'hidden'
                    );

                if (archivosCuerpo) {
                    archivosCuerpo.innerHTML =
                        '';
                }

                return;
            }

            sinArchivos?.setAttribute(
                'hidden',
                ''
            );

            if (archivosCuerpo) {
                archivosCuerpo.innerHTML =
                    lista
                        .map(function (item) {
                            const extension =
                                item.extension
                                    ? String(
                                        item.extension
                                    ).toUpperCase()
                                    : 'ARCHIVO';

                            return `
                                <tr>
                                    <td>
                                        ${escaparHtml(
                                            item.nombre_original
                                        )}
                                    </td>

                                    <td>
                                        ${escaparHtml(
                                            extension
                                        )}
                                    </td>

                                    <td>
                                        ${escaparHtml(
                                            obtenerTamano(
                                                item.tamano_bytes
                                            )
                                        )}
                                    </td>

                                    <td>
                                        ${escaparHtml(
                                            formatearFecha(
                                                item.created_at
                                            )
                                        )}
                                    </td>
                                </tr>
                            `;
                        })
                        .join('');
            }
        } catch (errorConsulta) {
            console.error(
                'Error al consultar archivos guardados:',
                errorConsulta
            );

            limpiarArchivosGuardados();
        }
    }

    function seleccionarPonente(ponente) {
        if (!ponente) {
            if (idPonente) {
                idPonente.value = '';
            }

            seccionMaterial?.setAttribute(
                'hidden',
                ''
            );

            limpiarArchivosGuardados();
            mostrarMensajeSeleccion();

            return;
        }

        ocultarMensajeSeleccion();
        ocultarResultados();
        limpiarArchivos();

        if (idPonente) {
            idPonente.value =
                ponente.id_ponente ?? '';
        }

        if (nombrePonente) {
            nombrePonente.textContent =
                ponente.nombre_completo ?? '';
        }

        if (cargoPonente) {
            cargoPonente.textContent =
                ponente.cargo ?? '';
        }

        if (fotoPonente) {
            const imagen =
                ponente.imagen ?? '';

            if (imagen !== '') {
                fotoPonente.src =
                    imagen;

                fotoPonente.alt =
                    ponente.nombre_completo
                        ? `Fotografía de ${ponente.nombre_completo}`
                        : 'Fotografía del ponente';

                fotoPonente.removeAttribute(
                    'hidden'
                );
            } else {
                fotoPonente.src = '';
                fotoPonente.alt = '';

                fotoPonente.setAttribute(
                    'hidden',
                    ''
                );
            }
        }

        seccionMaterial?.removeAttribute(
            'hidden'
        );

        cargarArchivosGuardados(
            ponente.id_ponente
        );

        window.setTimeout(
            function () {
                seccionMaterial
                    ?.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
            },
            100
        );
    }

    function sincronizarInput() {
        if (!archivo) {
            return;
        }

        const transferencia =
            new DataTransfer();

        archivosSeleccionados.forEach(
            function (item) {
                transferencia.items.add(
                    item
                );
            }
        );

        archivo.files =
            transferencia.files;
    }

    function renderizarArchivos() {
        if (!listadoArchivos) {
            return;
        }

        if (
            archivosSeleccionados.length === 0
        ) {
            listadoArchivos.hidden = true;
            listadoArchivos.innerHTML = '';

            return;
        }

        listadoArchivos.hidden = false;

        listadoArchivos.innerHTML =
            archivosSeleccionados
                .map(function (
                    item,
                    indice
                ) {
                    const nombreSeguro =
                        escaparHtml(
                            item.name
                        );

                    return `
                        <div
                            class="material-modal__archivo-item"
                            data-indice="${indice}"
                        >
                            <div class="material-modal__archivo-icono">
                                <i
                                    class="bi bi-file-earmark-check"
                                    aria-hidden="true"
                                ></i>
                            </div>

                            <div class="material-modal__archivo-datos">
                                <strong>
                                    ${nombreSeguro}
                                </strong>

                                <span>
                                    ${obtenerExtension(
                                        item.name
                                    )}
                                    ·
                                    ${obtenerTamano(
                                        item.size
                                    )}
                                </span>
                            </div>

                            <button
                                type="button"
                                class="material-modal__archivo-eliminar"
                                data-indice="${indice}"
                                aria-label="Eliminar ${nombreSeguro}"
                            >
                                ×
                            </button>
                        </div>
                    `;
                })
                .join('');
    }

    function limpiarArchivos() {
        archivosSeleccionados = [];

        if (archivo) {
            archivo.value = '';
        }

        sincronizarInput();
        renderizarArchivos();
    }

    function mostrarErrorSeleccionArchivo(
        mensaje
    ) {
        if (!listadoArchivos) {
            return;
        }

        listadoArchivos.hidden = false;

        listadoArchivos.innerHTML = `
            <p class="material-modal__archivo-error">
                ${escaparHtml(mensaje)}
            </p>
        `;
    }

    /*
     * Regresa completamente al buscador
     * después de una carga exitosa o parcial.
     */
    function regresarAlBuscador() {
        window.clearTimeout(
            temporizadorResultado
        );

        limpiarArchivos();
        limpiarArchivosGuardados();

        exito?.setAttribute(
            'hidden',
            ''
        );

        error?.setAttribute(
            'hidden',
            ''
        );

        formulario?.removeAttribute(
            'hidden'
        );

        if (buscador) {
            buscador.value = '';

            buscador.setAttribute(
                'aria-expanded',
                'false'
            );
        }

        if (idPonente) {
            idPonente.value = '';
        }

        if (nombrePonente) {
            nombrePonente.textContent =
                'Nombre del ponente';
        }

        if (cargoPonente) {
            cargoPonente.textContent =
                'Cargo del ponente';
        }

        if (fotoPonente) {
            fotoPonente.src = '';
            fotoPonente.alt = '';

            fotoPonente.setAttribute(
                'hidden',
                ''
            );
        }

        seccionMaterial?.setAttribute(
            'hidden',
            ''
        );

        cerrarListaPonentes();
        ocultarMensajeSeleccion();

        if (botonSubir) {
            botonSubir.disabled = false;

            botonSubir.textContent =
                'Guardar material';
        }

        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });

        window.setTimeout(
            function () {
                buscador?.focus();
            },
            600
        );
    }

    /*
     * limpiarDespues se utiliza cuando hubo
     * una carga parcial: algunos archivos sí
     * se guardaron y otros fueron rechazados.
     */
    function mostrarResultado(
        fueExitoso,
        mensaje = '',
        titulo = '',
        limpiarDespues = false
    ) {
        window.clearTimeout(
            temporizadorResultado
        );

        formulario?.setAttribute(
            'hidden',
            ''
        );

        exito?.setAttribute(
            'hidden',
            ''
        );

        error?.setAttribute(
            'hidden',
            ''
        );

        if (fueExitoso) {
            exito?.removeAttribute(
                'hidden'
            );
        } else {
            if (errorTitulo) {
                errorTitulo.textContent =
                    titulo ||
                    'No se pudieron guardar los archivos';
            }

            if (errorMensaje) {
                errorMensaje.textContent =
                    mensaje ||
                    'Revisa los archivos seleccionados.';
            }

            error?.removeAttribute(
                'hidden'
            );
        }

        temporizadorResultado =
            window.setTimeout(
                function () {
                    /*
                     * Éxito completo o parcial:
                     * volver automáticamente
                     * al buscador.
                     */
                    if (
                        fueExitoso ||
                        limpiarDespues
                    ) {
                        regresarAlBuscador();

                        return;
                    }

                    /*
                     * Si no se guardó ningún archivo,
                     * mantener abierto el formulario.
                     */
                    ocultarResultados();
                    renderizarArchivos();

                    if (botonSubir) {
                        botonSubir.disabled =
                            false;

                        botonSubir.textContent =
                            'Guardar material';
                    }
                },
                fueExitoso
                    ? 3000
                    : 8000
            );
    }

    buscador?.addEventListener(
        'focus',
        function () {
            renderizarListaPonentes(
                this.value
            );
        }
    );

    buscador?.addEventListener(
        'input',
        function () {
            ocultarMensajeSeleccion();

            if (idPonente) {
                idPonente.value = '';
            }

            seccionMaterial?.setAttribute(
                'hidden',
                ''
            );

            limpiarArchivosGuardados();

            renderizarListaPonentes(
                this.value
            );
        }
    );

    listaPonentes?.addEventListener(
        'click',
        function (evento) {
            const opcion =
                evento.target.closest(
                    '.material-ponentes__opcion'
                );

            if (!opcion) {
                return;
            }

            const idSeleccionado =
                String(
                    opcion.dataset.id ?? ''
                );

            const ponente =
                ponentes.find(
                    function (item) {
                        return String(
                            item.id_ponente
                        ) === idSeleccionado;
                    }
                ) ?? null;

            if (!ponente) {
                mostrarMensajeSeleccion();

                return;
            }

            if (buscador) {
                buscador.value =
                    ponente.nombre_completo;
            }

            seleccionarPonente(
                ponente
            );

            cerrarListaPonentes();
        }
    );

    document.addEventListener(
        'click',
        function (evento) {
            const dentroBuscador =
                evento.target.closest(
                    '.material-ponentes__buscador'
                );

            if (!dentroBuscador) {
                cerrarListaPonentes();
            }
        }
    );

    buscador?.addEventListener(
        'keydown',
        function (evento) {
            if (evento.key === 'Escape') {
                cerrarListaPonentes();

                this.blur();
            }
        }
    );

    botonSeleccionar?.addEventListener(
        'click',
        function (evento) {
            evento.preventDefault();
            evento.stopPropagation();

            archivo?.click();
        }
    );

    archivo?.addEventListener(
        'change',
        function () {
            const nuevosArchivos =
                Array.from(
                    this.files ?? []
                );

            nuevosArchivos.forEach(
                function (nuevoArchivo) {
                    const duplicado =
                        archivosSeleccionados
                            .some(
                                function (
                                    existente
                                ) {
                                    return (
                                        existente.name ===
                                            nuevoArchivo.name
                                        &&
                                        existente.size ===
                                            nuevoArchivo.size
                                        &&
                                        existente.lastModified ===
                                            nuevoArchivo.lastModified
                                    );
                                }
                            );

                    if (!duplicado) {
                        archivosSeleccionados.push(
                            nuevoArchivo
                        );
                    }
                }
            );

            sincronizarInput();
            renderizarArchivos();
        }
    );

    listadoArchivos?.addEventListener(
        'click',
        function (evento) {
            const botonEliminar =
                evento.target.closest(
                    '.material-modal__archivo-eliminar'
                );

            if (!botonEliminar) {
                return;
            }

            const indice =
                Number(
                    botonEliminar.dataset.indice
                );

            if (
                !Number.isInteger(indice) ||
                indice < 0 ||
                indice >=
                    archivosSeleccionados.length
            ) {
                return;
            }

            archivosSeleccionados.splice(
                indice,
                1
            );

            sincronizarInput();
            renderizarArchivos();
        }
    );

    formulario?.addEventListener(
        'submit',
        async function (evento) {
            evento.preventDefault();

            if (!idPonente?.value) {
                mostrarMensajeSeleccion();
                buscador?.focus();

                return;
            }

            if (
                archivosSeleccionados.length === 0
            ) {
                mostrarErrorSeleccionArchivo(
                    'Selecciona al menos un archivo.'
                );

                return;
            }

            const uploadUrl =
                formulario.dataset.uploadUrl;

            if (!uploadUrl) {
                mostrarResultado(
                    false,
                    'No se configuró la ruta de carga.'
                );

                return;
            }

            try {
                if (botonSubir) {
                    botonSubir.disabled =
                        true;

                    botonSubir.textContent =
                        'Guardando material...';
                }

                const datosFormulario =
                    new FormData();

                datosFormulario.append(
                    'id_ponente',
                    idPonente.value
                );

                archivosSeleccionados.forEach(
                    function (item) {
                        datosFormulario.append(
                            'archivos[]',
                            item,
                            item.name
                        );
                    }
                );

                const respuesta =
                    await fetch(
                        uploadUrl,
                        {
                            method: 'POST',

                            body:
                                datosFormulario,

                            headers: {
                                'X-Requested-With':
                                    'XMLHttpRequest',

                                Accept:
                                    'application/json'
                            },

                            credentials:
                                'same-origin'
                        }
                    );

                const textoRespuesta =
                    await respuesta.text();

                let resultado = null;

                try {
                    resultado =
                        textoRespuesta
                            ? JSON.parse(
                                textoRespuesta
                            )
                            : null;
                } catch (errorJson) {
                    console.error(
                        'Respuesta del servidor:',
                        textoRespuesta
                    );

                    throw new Error(
                        'El servidor no devolvió una respuesta válida.'
                    );
                }

                if (
                    !respuesta.ok ||
                    !resultado?.success
                ) {
                    const detalle =
                        resultado
                            ?.detalle_rechazos ||
                        resultado
                            ?.message ||
                        'No fue posible guardar los archivos.';

                    throw new Error(
                        detalle
                    );
                }

                await cargarArchivosGuardados(
                    idPonente.value
                );

                const rechazados =
                    Array.isArray(
                        resultado.archivos_rechazados
                    )
                        ? resultado.archivos_rechazados
                        : [];

                if (
                    resultado.partial_success ===
                        true ||
                    rechazados.length > 0
                ) {
                    const detalle =
                        rechazados.length > 0
                            ? rechazados
                                .map(
                                    function (item) {
                                        const nombre =
                                            item.nombre ||
                                            'Archivo';

                                        const motivo =
                                            item.motivo ||
                                            'No fue aceptado.';

                                        return `• ${nombre}: ${motivo}`;
                                    }
                                )
                                .join('\n')
                            : (
                                resultado
                                    .detalle_rechazos ||
                                'Algunos archivos no fueron aceptados.'
                            );

                    mostrarResultado(
                        false,
                        detalle,
                        'Algunos archivos no se guardaron',
                        true
                    );

                    return;
                }

                mostrarResultado(
                    true,
                    resultado.message ||
                    'Material guardado correctamente.'
                );
            } catch (errorCarga) {
                console.error(
                    'Error al guardar material:',
                    errorCarga
                );

                mostrarResultado(
                    false,
                    errorCarga instanceof Error
                        ? errorCarga.message
                        : 'No se pudieron guardar los archivos.'
                );
            } finally {
                if (
                    botonSubir &&
                    !formulario.hidden
                ) {
                    botonSubir.disabled =
                        false;

                    botonSubir.textContent =
                        'Guardar material';
                }
            }
        }
    );
})();