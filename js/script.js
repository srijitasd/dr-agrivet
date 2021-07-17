const clientTable = document.getElementById("client-table-body");

// * Hamburger functionality
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

// * Run online api function
window.addEventListener("load", (e) => {
  setInterval(() => {
    setUserOnline();
  }, 10000);
});

// * Close modal code
document.addEventListener("click", (e) => {
  console.log(e.target);
  if (e.target.id === "simpleModal_1") {
    gsap.to("#simpleModal_1", {
      display: "none",
      opacity: 0,
      duration: 0.5,
    });
  }
});

window.onload = function () {
  // * Open Event Modal
  setTimeout(() => {
    gsap.to("#simpleModal_1", {
      display: "block",
      opacity: 1,
      duration: 0.5,
    });
  }, 2000);

  // * Fetch user data that shows online or offline
  $.ajax({
    url: "./includes/api/fetchuser-api.php",
    method: "GET",
    success: function (datas) {
      console.log(datas);
      datas.forEach((data) => {
        populateTable(data);
      });
    },
  });

  // * GSAP preloader animation
  gsap.to(".preloader-container", {
    opacity: 0,
    display: "none",
  });
  gsap.to(".preloader-container", {
    delay: 0.5,
  });

  // * GSAP download slide animation
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

  // * generate geolocation using ip
  var clientDetails = {
    ip: "",
    city: "",
  };

  $.ajax({
    url: "https://ipgeolocation.abstractapi.com/v1/?api_key=2953bb2319364e3ca1b730dc6c140b13",
    dataType: "json",
    async: false,
    success: function ({ ip_address, city }) {
      (clientDetails.ip = ip_address), (clientDetails.city = city);
    },
  });

  // * manage user ip with database
  const storedKey = localStorage.getItem("client-id");
  const storedDetails = localStorage.getItem("client-ip");
  setClientUniqueKey(storedKey, clientDetails, storedDetails);

  // * Enquiry api
  const enquiryBtn = document.getElementById("enquiry-btn");
  const inputs = document.querySelectorAll("input");
  const textArea = document.getElementById("en-details");

  $(enquiryBtn).on("click", (e) => {
    e.preventDefault();

    var jsonObj = jsonData("#enquiry-form");

    if (!jsonObj) {
      alert("hello");
    } else {
      $.ajax({
        url: "./includes/api/form-handler-api.php",
        type: "POST",
        data: jsonObj,
        success: function (data) {
          switch (data.status) {
            case 201:
              // enquiryBtn.setAttribute("disabled", true);
              inputs.forEach((input) => (input.value = ""));
              textArea.value = "";
              break;

            default:
              break;
          }
        },
      });
    }
  });

  // Newsletter api
  const newsletterBtn = document.getElementById("newsletter-btn");

  $(newsletterBtn).on("click", (e) => {
    e.preventDefault();

    var jsonObj = jsonData("#newsletter-form");

    if (!jsonObj) {
      alert("hello");
    } else {
      $.ajax({
        url: "./includes/api/newsletter-api.php",
        type: "POST",
        data: jsonObj,
        success: function (data) {
          switch (data.status) {
            case 201:
              // newsletterBtn.setAttribute("disabled", true);
              inputs.forEach((input) => (input.value = ""));
              textArea.value = "";

              break;

            default:
              break;
          }
        },
      });
    }
  });

  // * Viewbox code
  $(function () {
    $(".image-link").viewbox();
  });

  const btns = document.querySelectorAll(".acc-btn");

  // * Accordion faq
  btns.forEach((el) => el.addEventListener("click", accordion));

  // * HERO CAROUSEL
  new Splide(".hero-carousel", {
    type: "fade",
    rewind: true,
    autoplay: true,
    arrows: false,
    pagination: false,
    easing: "linear",
  }).mount();

  // * TESTIMONIALS CAROUSEL
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

// * functions

// * OPEN NAV FUNCTION
function toggleNav() {
  gsap.to(".mobile-navigation-container", {
    display: "block",
    height: "100vh",
    duration: 0.5,
  });
}

// * CLOSE NAV FUNCTION
function closeNav() {
  gsap.to(".mobile-navigation-container", {
    display: "none",
    height: "0",
    duration: 0.5,
  });
}

// * GENERATE CLIENT ID, IP AND CITY FUNCTION (CONTAINER FUNCTION FOR setClientData)
function setClientUniqueKey(storedKey, clientDetails, storedDetails) {
  if (storedKey == null) {
    const clientKey = Date.now().toString();
    localStorage.setItem("client-id", clientKey);
    setClientData(clientKey, clientDetails, storedDetails);
  }
  if (storedKey != null) {
    setClientData(storedKey, clientDetails, storedDetails);
  } else {
  }
}

// * SAVE CLIENT DATA FUNCTION
function setClientData(ClientKey, { ip, city }, storedDetails) {
  if (ClientKey) {
    if (ip && city && !storedDetails) {
      localStorage.setItem("client-ip", ip);
      localStorage.setItem("client-city", city);
      // * ajax call for new entry

      const saveData = {
        ClientKey,
        ip,
        city,
      };
      const jsonObj = JSON.stringify(saveData);

      makeAjaxRequest("saveClientIp", jsonObj);
    }

    if (ip != storedDetails && storedDetails != null) {
      localStorage.removeItem("client-ip");
      localStorage.removeItem("client-city");
      localStorage.setItem("client-ip", ip);
      localStorage.setItem("client-city", city);
      // * ajax call for updating data with client data
      const updateData = {
        ClientKey,
        ip,
        city,
      };
      const jsonObj = JSON.stringify(updateData);

      makeAjaxRequest("updateClient", jsonObj);
    }
  }
}

// * MAKE AJAX REQUEST FUNCTION
function makeAjaxRequest(apiName, jsonObj) {
  $.ajax({
    url: `./includes/api/${apiName}-api.php`,
    type: "PATCH",
    data: jsonObj,
    success: function (data) {
      console.log(data);
    },
  });
}

// * ACCORDION FUNCTION
function accordion() {
  this.classList.toggle("is-open");
  const content = this.nextElementSibling;
  if (content.style.maxHeight) content.style.maxHeight = null;
  else content.style.maxHeight = content.scrollHeight + "px";
}

// * MAKE JSON FROM OBJECT FUNCTION
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

// * SET USER ONLINE FUNCTION
function setUserOnline() {
  const ClientKey = localStorage.getItem("client-id");
  const onlineStatus = {
    ClientKey,
  };
  const onlineJson = JSON.stringify(onlineStatus);

  $.ajax({
    url: "./includes/api/online-api.php",
    type: "POST",
    data: onlineJson,
    success: function (data) {
      console.log(data);
    },
  });
}

// ! POPULATE TABLE FUNCTION
// const populateTable = (data) => {
//   var tr = document.createElement("tr");
//   var idTd = document.createElement("td");
//   idTd.innerText = data.client_id;
//   var dateTd = document.createElement("td");
//   dateTd.innerText = data.client_date;
//   var timeTd = document.createElement("td");
//   timeTd.innerText = data.client_time;
//   var ipTd = document.createElement("td");
//   ipTd.innerText = data.client_ip;
//   var cityTd = document.createElement("td");
//   cityTd.innerText = data.client_city;
//   var onlineTd = document.createElement("td");
//   onlineTd.innerText = data.status;
//   onlineTd.classList.add(data.class);
//   tr.appendChild(idTd);
//   tr.appendChild(dateTd);
//   tr.appendChild(timeTd);
//   tr.appendChild(ipTd);
//   tr.appendChild(cityTd);
//   tr.appendChild(onlineTd);
//   clientTable.appendChild(tr);
// };
