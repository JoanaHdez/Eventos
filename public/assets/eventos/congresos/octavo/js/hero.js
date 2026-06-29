document.addEventListener("DOMContentLoaded", () => {

    const hero = document.getElementById("hero");
    const titulo = document.querySelector(".hero_texto h1");
    const imagenes = document.querySelectorAll(".hero-imagenes img");

    const menu = document.querySelector(".hero-menu");
    const menuToggle = document.querySelector(".hero-menu-toggle");

    let menuStickyStart = 0;
    let posiciones = ["img1", "img2", "img3", "img4", "img5"];

    function calcularMenuSticky() {
        if (!menu) return;

        menu.classList.remove("is-fixed");

        const rect = menu.getBoundingClientRect();
        menuStickyStart = window.scrollY + rect.top - 20;

        actualizarMenuSticky();
    }

    function actualizarMenuSticky() {
        if (!menu) return;

        menu.classList.toggle("is-fixed", window.scrollY >= menuStickyStart);
    }

    function actualizarHero() {
        const imagenFrente = document.querySelector(".hero-imagenes .img1");

        if (!imagenFrente || !hero || !titulo) return;

        hero.style.backgroundImage = `url('${imagenFrente.dataset.bg}')`;

        titulo.style.opacity = "0";

        setTimeout(() => {
            titulo.textContent = imagenFrente.dataset.title;
            titulo.style.opacity = "1";
        }, 400);
    }

    if (menuToggle && menu) {
        menuToggle.addEventListener("click", () => {
            menu.classList.toggle("active");
            menuToggle.textContent = menu.classList.contains("active") ? "×" : "☰";
        });

        menu.querySelectorAll("a").forEach(link => {
            link.addEventListener("click", () => {
                menu.classList.remove("active");
                menuToggle.textContent = "☰";
            });
        });
    }

    actualizarHero();
    calcularMenuSticky();

    window.addEventListener("scroll", actualizarMenuSticky, { passive: true });
    window.addEventListener("resize", calcularMenuSticky);
    window.addEventListener("load", calcularMenuSticky);

    setInterval(() => {
        const primera = posiciones.shift();
        posiciones.push(primera);

        imagenes.forEach((img, i) => {
            img.classList.remove("img1", "img2", "img3", "img4", "img5");
            img.classList.add(posiciones[i]);
        });

        actualizarHero();

    }, 3000);

});