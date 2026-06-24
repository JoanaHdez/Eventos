document.addEventListener("DOMContentLoaded", () => {
    const slider = document.querySelector(".transmision-slider");
    const cards = document.querySelectorAll(".video-card");
    const dots = document.querySelectorAll(".transmision-dots .dot");

    if (!slider || cards.length === 0) return;

    let activeIndex = 0;
    const total = cards.length;
    const cardWidth = 640;
    const gap = 45;

    function actualizarSlider(index) {
        activeIndex = index;

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

    setInterval(() => {
        const siguiente = activeIndex === total - 1 ? 0 : activeIndex + 1;
        actualizarSlider(siguiente);
    }, 4000);

    actualizarSlider(0);
});