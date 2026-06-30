document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.hero-slide');

    console.log('slides encontrados:', slides.length);

    let current = 0;

    if (slides.length <= 1) return;

    setInterval(function () {
        slides[current].classList.remove('active');

        current = (current + 1) % slides.length;

        slides[current].classList.add('active');

        console.log('slide actual:', current);
    }, 3000);
});