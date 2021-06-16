const hamburger = document.getElementById("hamburger-1");
hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("is-active");
});

$(document).ready(function () {
  $(".hero-carousel").slick({
    // setting-name: setting-value
  });
});
