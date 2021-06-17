const hamburger = document.getElementById("hamburger-1");
hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("is-active");
});

window.onload = function () {
  new Splide(".hero-carousel", {
    type: "fade",
    rewind: true,
    autoplay: true,
    arrows: false,
    pagination: false,
    easing: "linear",
  }).mount();

  new Splide(".testimonial-carousel", {
    type: "loop",
    perPage: 2,
    perMove: 1,
    arrows: false,
    pagination: false,
    focus: "center",
    autoplay: false,
    padding: {
      right: "10rem",
      left: "10rem",
    },
    gap: "4rem",
    breakpoints: {
      1030: {
        padding: {
          right: "0rem",
          left: "0rem",
        },
        gap: "2rem",
      },
      1000: {
        perPage: 1,
        gap: "1rem",
        padding: {
          right: "02rem",
          left: "02rem",
        },
      },
      560: {
        perPage: 1,
        gap: "1rem",
        padding: {
          right: "01rem",
          left: "01rem",
        },
      },
    },
  }).mount();
};
