document.addEventListener("DOMContentLoaded", () => {
    const slider = document.querySelector(".transmision-slider");
    const cards = document.querySelectorAll(".video-card");
    const dots = document.querySelectorAll(".transmision-dots .dot");

    if (!slider || cards.length === 0) return;

    let activeIndex = 0;

    function obtenerGap() {
        return parseFloat(getComputedStyle(slider).gap) || 0;
    }

    function actualizarSlider(index) {
        activeIndex = index;

        const cardWidth = cards[0].offsetWidth;
        const gap = obtenerGap();
        const movimiento = activeIndex * (cardWidth + gap);

        slider.style.transform = `translateX(-${movimiento}px)`;

        cards.forEach((card, i) => {
            card.classList.toggle("active", i === activeIndex);
        });

        dots.forEach((dot, i) => {
            dot.classList.toggle("active", i === activeIndex);
        });
    }

    dots.forEach(dot => {
        dot.addEventListener("click", () => {
            actualizarSlider(Number(dot.dataset.index));
        });
    });

    window.addEventListener("resize", () => {
        actualizarSlider(activeIndex);
    });

    setInterval(() => {
        const siguiente = activeIndex === cards.length - 1 ? 0 : activeIndex + 1;
        actualizarSlider(siguiente);
    }, 4000);

    actualizarSlider(0);
});