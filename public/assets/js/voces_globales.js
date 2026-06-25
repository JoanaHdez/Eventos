document.addEventListener("DOMContentLoaded", () => {
  const slides = document.querySelectorAll(".vg-view");
  const dots = document.querySelectorAll(".vg-dot");
  const modal = document.getElementById("vg-modal");
  const modalImage = document.getElementById("vg-modal-image");
  const modalDownload = document.getElementById("vg-modal-download");
  const modalClose = document.querySelector(".vg-modal-close");

  document.querySelectorAll(".vg-modal-img").forEach((img) => {
    img.addEventListener("click", () => {
      modalImage.src = img.src;
      modalDownload.href = img.dataset.pdf;
      modal.classList.add("active");
    });
  });

  modalClose.addEventListener("click", () => {
    modal.classList.remove("active");
  });

  modal.addEventListener("click", (e) => {
    if (e.target === modal) {
      modal.classList.remove("active");
    }
  });

  if (!slides.length) return;

  let activeIndex = 0;

  function cambiarSlide(index) {
    if (!slides[index]) return;

    activeIndex = index;

    slides.forEach((slide, i) => {
      slide.classList.toggle("active", i === index);
    });

    dots.forEach((dot) => {
      dot.classList.toggle("active", Number(dot.dataset.index) === index);
    });
  }

  dots.forEach((dot) => {
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
