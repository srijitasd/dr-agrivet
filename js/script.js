const hamburger = document.getElementById("hamburger-1");
hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("is-active");
});

window.onload = function () {
  new Splide(".splide", {
    type: "fade",
    rewind: true,
    autoplay: true,
    arrows: false,
    pagination: false,
    easing: "linear",
  }).mount();
};
