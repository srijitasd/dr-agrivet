const hamburger = document.getElementById("hamburger-1");
var isNavOpen = false;
hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("is-active");
  isNavOpen = !isNavOpen;
  if (isNavOpen) {
    toggleNav();
  } else {
    closeNav();
  }
});

function toggleNav() {
  gsap.to(".mobile-navigation-container", {
    display: "block",
    height: "100vh",
    duration: 0.5,
  });
}
function closeNav() {
  gsap.to(".mobile-navigation-container", {
    display: "none",
    height: "0",
    duration: 0.5,
  });
}

window.onload = function () {
  gsap.fromTo(
    ".download-slide-1",
    {
      x: -40,
    },
    {
      x: 0,
      duration: 0.75,
    }
  );

  gsap.fromTo(
    ".download-slide-2",
    {
      x: 40,
    },
    {
      x: 0,
      duration: 1,
    }
  );

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
    autoplay: true,
    speed: 2000,
    interval: 5000,
    padding: {
      right: "20rem",
      left: "20rem",
    },
    gap: "4rem",
    breakpoints: {
      1500: {
        padding: {
          right: "6rem",
          left: "6rem",
        },
      },
      1024: {
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
          right: "8rem",
          left: "8rem",
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
