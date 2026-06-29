document.addEventListener("DOMContentLoaded", () => {
  const cards = Array.from(document.querySelectorAll(".ponente-card"));
  const descripcion = document.getElementById("ponente-descripcion");
  const prev = document.querySelector(".ponente-arrow.prev");
  const next = document.querySelector(".ponente-arrow.next");

  if (!cards.length || !descripcion) return;

  let activeIndex = cards.findIndex((card) =>
    card.classList.contains("is-center"),
  );
  if (activeIndex < 0) activeIndex = 0;

  function pintarCarrusel() {
    cards.forEach((card) => {
      card.classList.remove("is-left", "is-center", "is-right", "is-hidden");
    });

    const total = cards.length;
    const leftIndex = (activeIndex - 1 + total) % total;
    const rightIndex = (activeIndex + 1) % total;

    cards.forEach((card, i) => {
      if (i === leftIndex) {
        card.classList.add("is-left");
      } else if (i === activeIndex) {
        card.classList.add("is-center");
      } else if (i === rightIndex) {
        card.classList.add("is-right");
      } else {
        card.classList.add("is-hidden");
      }
    });

    descripcion.classList.add("fade");

    setTimeout(() => {
      descripcion.textContent = cards[activeIndex].dataset.descripcion || "";
      descripcion.classList.remove("fade");
    }, 250);
  }

  function siguiente() {
    activeIndex = (activeIndex + 1) % cards.length;
    pintarCarrusel();
  }

  function anterior() {
    activeIndex = (activeIndex - 1 + cards.length) % cards.length;
    pintarCarrusel();
  }

  next.addEventListener("click", siguiente);
  prev.addEventListener("click", anterior);

  setInterval(siguiente, 5000);

  pintarCarrusel();
});
