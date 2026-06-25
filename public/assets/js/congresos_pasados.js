document.addEventListener("DOMContentLoaded", () => {
    const section = document.querySelector(".congresos-anteriores");
    const items = Array.from(document.querySelectorAll(".ca-item"));
    const title = document.getElementById("ca-title");
    const text = document.getElementById("ca-text");
    const link = document.getElementById("ca-link");
    const info = document.querySelector(".ca-info");
    const btnUp = document.querySelector(".ca-up");
    const btnDown = document.querySelector(".ca-down");

    if (!items.length) return;

    let activeIndex = 0;

    function pintar() {
        const total = items.length;
        const topIndex = (activeIndex - 1 + total) % total;
        const bottomIndex = (activeIndex + 1) % total;

        items.forEach((item, i) => {
            item.classList.remove("is-top", "is-center", "is-bottom", "is-hidden");

            if (i === topIndex) {
                item.classList.add("is-top");
            } else if (i === activeIndex) {
                item.classList.add("is-center");
            } else if (i === bottomIndex) {
                item.classList.add("is-bottom");
            } else {
                item.classList.add("is-hidden");
            }
        });

        const active = items[activeIndex];

        section.style.backgroundImage = `url('${active.dataset.bg}')`;

        info.classList.add("fade");

        setTimeout(() => {
            title.textContent = active.dataset.title;
            text.textContent = active.dataset.text;
            link.href = active.dataset.link;

            info.classList.remove("fade");
        }, 250);
    }

    function siguiente() {
        activeIndex = (activeIndex + 1) % items.length;
        pintar();
    }

    function anterior() {
        activeIndex = (activeIndex - 1 + items.length) % items.length;
        pintar();
    }

    btnDown.addEventListener("click", siguiente);
    btnUp.addEventListener("click", anterior);

    setInterval(siguiente, 5000);

    pintar();
});