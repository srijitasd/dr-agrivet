<?php  header("Cache-Control: max-age=31536000"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" 
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" 
      crossorigin="anonymous" referrerpolicy="no-referrer" 
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/viewbox.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <meta http-equiv="Cache-control" content="public">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0" />
    <link rel="stylesheet" href="./css/main.css" />
    <title>Dr Agrivet</title>
  </head>

<body>

  <div class="preloader-container">
    <div class="preloader-animation-container" id="preloader-container">
      <img src="./assets/logo/logo.webp" id="pre-loader-img" alt="" />
      <div id="line">
        <div id="inner"></div>
      </div>
    </div>
  </div>

    <!-- HEADER SECTIN STARTS  -->
    
  <div class="main-container">
    <header class="header-container">
      <img src="./assets/logo/dragrivet-logo.svg" alt="">
      <ol>
        <li class="login"><a href=""><i class="fas fa-sign-in-alt"></i> Login</a></li>
        <li><a href="./contact-us.php">Contact Us</a></li>
        <li><a href="./faq.php">FAQ</a></li>
        <li><a href="./gallery.php">Gallery</a></li>+
        <li><a href="./download.php">Download</a></li>
        <li><a href="./features.php">Features</a></li>
        <li><a href="./promoters.php">Promoters</a></li>
        <li><a href="./about-us.php">About Us</a></li>
        <li><a href="./">Home</a></li>
      </ol>

      <div class="hamburger" id="hamburger-1">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </div>
    </header>

    <div class="mobile-navigation-container">
      <div class="mob-nav-inner-container">
        <a href="./"><img src="./assets/logo/nav-home.svg" alt=""><h4>Home</h4></a>
        <hr>
        <a href="./about-us.php"><img src="./assets/logo/nav-about.svg" alt=""><h4>About Us</h4></a>
        <hr>
        <a href="./promoters.php"><img src="./assets/logo/nav-promoters.svg" alt=""><h4>Promoters</h4></a>
        <hr>
        <a href="./features.ph"><img src="./assets/logo/nav-features.svg" alt=""><h4>Features</h4></a>
        <hr>
        <a href="./download.php"><img src="./assets/logo/nav-download.svg" alt=""><h4>Download</h4></a>
        <hr>
        <a href="./gallery.php"><img src="./assets/logo/nav-gallery.svg" alt=""><h4>Gallery</h4></a>
        <hr>
        <a href="./faq.php"><img src="./assets/logo/nav-faq.svg" alt=""><h4>FAQ</h4></a>
        <hr>
        <a href="./contact-us.php"><img src="./assets/logo/nav-contact.svg" alt=""><h4>Contact Us</h4></a>
        <hr>
        
      </div>
    </div>