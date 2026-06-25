document.addEventListener("DOMContentLoaded", () => {
    const slides = document.querySelectorAll(".vg-slide");
    const dots = document.querySelectorAll(".vg-dot");

    const imgLeft = document.getElementById("vg-left-img");
    const imgPrograma = document.getElementById("vg-programa-img");
    const titulo = document.getElementById("vg-titulo");
    const texto = document.getElementById("vg-texto");
    const descargar = document.getElementById("vg-descargar");

    if (!slides.length) return;

    let activeIndex = 0;

    function cambiarSlide(index) {
        const slide = slides[index];

        imgLeft.classList.add("vg-fade");
        imgPrograma.classList.add("vg-fade");
        titulo.classList.add("vg-fade");
        texto.classList.add("vg-fade");

        setTimeout(() => {
            imgLeft.src = slide.dataset.left;
            imgPrograma.src = slide.dataset.programa;
            titulo.textContent = slide.dataset.titulo;
            texto.textContent = slide.dataset.texto;

            descargar.href = slide.dataset.descarga;

            slides.forEach((s, i) => s.classList.toggle("active", i === index));
            dots.forEach((d, i) => d.classList.toggle("active", i === index));

            imgLeft.classList.remove("vg-fade");
            imgPrograma.classList.remove("vg-fade");
            titulo.classList.remove("vg-fade");
            texto.classList.remove("vg-fade");
        }, 300);

        activeIndex = index;
    }

    descargar.addEventListener("click", (e) => {
        e.preventDefault();

        const slide = slides[activeIndex];

        const link = document.createElement("a");
        link.href = slide.dataset.descarga;
        link.download = "";
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    });

    dots.forEach(dot => {
        dot.addEventListener("click", () => {
            cambiarSlide(Number(dot.dataset.index));
        });
    });

    setInterval(() => {
        const siguiente = activeIndex === slides.length - 1 ? 0 : activeIndex + 1;
        cambiarSlide(siguiente);
    }, 4000);

    cambiarSlide(0);
});