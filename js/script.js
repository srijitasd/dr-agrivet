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

  // get the API result via jQuery.ajax
  var userContinent;
  var userCity;
  $.ajax({
    url: "https://ipgeolocation.abstractapi.com/v1/?api_key=2953bb2319364e3ca1b730dc6c140b13",
    dataType: "json",
    async: false,
    success: function (json) {
      // output the "capital" object inside "location"
      var userContinent = json.continent;
      userCity = json.city;
      // console.log(userContinent);
      // renderOptions(userCountry, userContinent);
    },
  });

  console.log(userCity);

  const enquiryBtn = document.getElementById("enquiry-btn");

  $(enquiryBtn).on("click", (e) => {
    e.preventDefault();

    var jsonObj = jsonData("#enquiry-form");

    if (!jsonObj) {
      alert("hello");
    } else {
      console.log(jsonObj);
      $.ajax({
        url: "./includes/api/form-handler-api.php",
        type: "POST",
        data: jsonObj,
        success: function (data) {
          switch (data.status) {
            case 201:
              enquiryBtn.setAttribute("disabled", true);

              break;

            default:
              break;
          }
        },
      });
    }
  });

  function jsonData(form) {
    var arr = $(form).serializeArray();
    var obj = {};
    for (var a = 0; a < arr.length; a++) {
      if (arr[a].value == "") {
        return false;
      }
      obj[arr[a].name] = arr[a].value;
    }

    var jsonData = JSON.stringify(obj);
    return jsonData;
  }

  $(function () {
    $(".image-link").viewbox();
  });

  const btns = document.querySelectorAll(".acc-btn");

  function accordion() {
    this.classList.toggle("is-open");
    const content = this.nextElementSibling;
    if (content.style.maxHeight) content.style.maxHeight = null;
    else content.style.maxHeight = content.scrollHeight + "px";
  }

  btns.forEach((el) => el.addEventListener("click", accordion));

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
