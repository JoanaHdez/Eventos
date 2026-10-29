document.addEventListener('DOMContentLoaded', function () {

    const scriptVisor = document.createElement('script');

    scriptVisor.src = window.BASE_URL_SEMBLANZAS
        + 'assets/eventos/plantillas/semblanzas/js/visor.js';

    scriptVisor.defer = true;

    document.body.appendChild(scriptVisor);


    const scriptLogin = document.createElement('script');

    scriptLogin.src = window.BASE_URL_SEMBLANZAS
        + 'assets/eventos/plantillas/semblanzas/js/login_ponente.js';

    scriptLogin.defer = true;

    document.body.appendChild(scriptLogin);


    /* ==========================
       Material del ponente
    ========================== */

    const scriptMaterial = document.createElement('script');

    scriptMaterial.src = window.BASE_URL_SEMBLANZAS
        + 'assets/eventos/plantillas/semblanzas/js/material-ponente.js';

    scriptMaterial.defer = true;

    document.body.appendChild(scriptMaterial);

});
