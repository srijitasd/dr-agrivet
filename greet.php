<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--HEADER CSS STARTS-->
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
        }

        .grid-container {
            display: flex;
            flex-direction: column;
            height: 100vh;
            background-image: url(./assets/backgrounds/thank-you.svg);
            background-size: cover;
            background-position: top center;
        }

        @media screen and (max-width: 1000px) {
            .grid-container {
                background-position: left center;
            }
        }

        a {
            text-decoration: none;
            color: black;
        }

        .service-booking-header {
            display: grid;
            grid-template-columns: 10% 90%;
            padding: 1rem 4rem;
        }

        .service-booking-header img {
            height: 5rem;
        }

        .service-booking-header-nav-container {
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 1fr 1fr;
            justify-self: right;
        }

        .service-booking-header-contact-container {
            display: flex;
            gap: 1rem;
            align-items: center;
            justify-self: end;
        }

        .service-booking-header-contact-container p {
            font-size: 18px;
        }

        .header-contact-num {
            color: #dc3545;
        }

        .header-contact-social {
            color: #1f8761;
        }

        .service-booking-header-contact-container i {
            transform: scale(1.5);
        }

        .service-booking-header-nav-links-container ul {
            list-style: none;
        }

        .service-booking-header-nav-links-container ul li {
            float: right;
        }

        .service-booking-header-nav-links-container ul a {
            text-decoration: none;
            color: #1f8761;
            padding: 0.5rem 0.75rem;
            border-radius: 1rem;
            font-size: 14px;
            transition: 0.3s;
        }

        .service-booking-header-nav-links-container ul a:hover {
            background-color: #1f8761;
            color: white;
        }

        .service-ul {
            position: relative;
        }

        .service-page-inner-list {
            position: absolute;
            display: none;
            float: none;
            left: 0%;
            width: max-content;
            top: 2.5rem;
            padding: 0.5rem 1rem;
            padding-bottom: 1rem;
            padding-right: 1.5rem;
            border: 1px solid rgb(153, 153, 153);
            border-radius: 0.5rem;
            z-index: 999;
            background-color: white;
        }

        .service-page-inner-list li {
            float: none !important;
            margin-left: 0.5rem;
            margin-top: 0.5rem;
        }

        .service-page-inner-list a {
            color: black !important;
        }

        .sub-headings {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 1.5rem !important;
        }

        @media only screen and (min-width: 1030px) {
            .service-booking-header {
                padding: 1rem 8rem;
            }

            .service-booking-header img {
                height: 7rem;
            }

            .service-booking-header-contact-container p {
                font-size: 20px;
                margin-bottom: 0;
            }

            .service-booking-header-nav-links-container ul a {
                font-size: 16px;
            }
        }

        .active {
            display: block !important;
        }

        .down-arrow {
            position: relative;
            top: 0.1rem;
            transform: scale(0.8);
        }

        .service-booking-header-nav-links-container .hamburger {
            display: none;
            width: fit-content;
            float: right;
            color: #2babdd;
            transform: scale(1.75);
            margin-top: 0.5rem;
        }

        @media only screen and (max-width: 1000px) {
            .service-booking-header {
                padding: 1rem 3rem;
            }

            .service-booking-header img {
                height: 4rem;
            }

            .service-booking-header-contact-container p {
                font-size: 16px;
            }

            .service-booking-header-nav-links-container ul {
                display: none;
            }

            .service-booking-header-nav-links-container ul a {
                font-size: 14px;
            }

            .service-booking-header-nav-links-container .hamburger {
                display: block;
            }
        }

        .ui-accordion .ui-accordion-content {
            height: 100% !important;
        }


        .mobile-nav-container {
            display: none;
            padding: 1rem;
            position: absolute;
            right: 2rem;
            min-width: 80%;
            border: 1px solid rgb(153, 153, 153);
            border-radius: 0.5rem;
            z-index: 999;
            background-color: white;
        }

        .mobile-nav-container ul {
            list-style: none;
        }

        .mobile-nav-container li {
            margin-bottom: 0.5rem;
        }

        .mob-service-list-container {
            margin: 0.5rem 0rem;
            display: none;
        }

        .mob-service-list-container li {
            font-size: 14px;
        }

        .mob-sub-heading {
            font-weight: bold;
        }

        .mob-service-list-container a {
            text-decoration: none;
            color: black;
        }

        @media screen and (max-width: 560px) {
            .service-booking-header-contact-container {
                display: none;
            }
        }
    </style>

    <!--HEADER CSS ENDS-->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#accordion").accordion();
        });
    </script>
    <title>Book your Service</title>
    <style>
        .list-style-none {
            list-style: none;
        }
    </style>
</head>

<body>
    <div class="grid-container">
        <!--HEADER STARTS-->
        <header class="service-booking-header">
            <img src="https://cleanmyplace.in/assets/images/logo.png" alt="" />
            <div class="service-booking-header-nav-container">
                <div class="service-booking-header-contact-container">
                    <p class="header-contact-num">Call Us: +91 9330022155</p>
                    <p class="header-contact-social">Get Social with us</p>
                    <a href=""><i style="color: #4267b2" class="fab fa-facebook-square"></i></a>
                    <a href=""><i style="color: #0077b5" class="fab fa-linkedin"></i></a>
                    <a href=""><i style="color: #00acee" class="fab fa-twitter-square"></i></a>
                    <a href=""><i style="color: #ff0000" class="fab fa-youtube-square"></i></a>
                    <a href=""><i style="color: #e800e4" class="fab fa-instagram-square"></i></a>
                </div>
                <div class="service-booking-header-nav-links-container" id="service-booking-header-nav-links-container">
                    <i class="fas fa-bars hamburger" id="hamburger"></i>
                    <ul>
                        <li>
                            <a href="https://cleanmyplace.in/service_booking.html">Book a Service</a>
                        </li>
                        <li><a href="https://cleanmyplace.in/contact.aspx">Contact</a></li>
                        <li><a href="https://cleanmyplace.in/offers.aspx">Offers</a></li>
                        <li><a href="https://cleanmyplace.in/loyalty.aspx">Loyalty</a></li>
                        <li>
                            <a href="https://cleanmyplace.in/index.aspx#School">School</a>
                        </li>
                        <li>
                            <a href="https://cleanmyplace.in/index.aspx#products">Products</a>
                        </li>
                        <li id="is-service" class="service-ul">
                            <a href="" id="service-ul" class="">Services <i class="fas fa-chevron-down down-arrow"></i></a>
                            <ul class="service-page-inner-list" id="service-page-inner-list">
                                <li>
                                    <a href="" id="service-ul" class="sub-headings">Smart Cleaning</a>
                                </li>

                                <li><a href="" id="service-ul">Residential Cleaning</a></li>
                                <li><a href="" id="service-ul">Workplace Cleaning</a></li>
                                <li><a href="" id="service-ul">Specialized Services</a></li>

                                <li>
                                    <a href="" id="service-ul" class="sub-headings">Pest Management</a>
                                </li>
                                <li>
                                    <a href="" id="service-ul" class="sub-headings">Disinfection & Sterilization</a>
                                </li>
                                <li>
                                    <a href="" id="service-ul" class="sub-headings">Water Hygiene Management</a>
                                </li>
                                <li>
                                    <a href="" id="service-ul" class="sub-headings">Space Beautification Services</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="https://cleanmyplace.in/index.aspx#about_us">About</a>
                        </li>
                        <li><a href="https://cleanmyplace.in/">Home</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="mobile-nav-container" id="mobile-nav-container">
            <ul>
                <li><a href="https://cleanmyplace.in/">Home</a></li>
                <li><a href="https://cleanmyplace.in/index.aspx#about_us">About</a></li>
                <li id="mob-service">
                    Services <i class="fas fa-chevron-down down-arrow"></i>
                </li>
                <div class="mob-service-list-container" id="mob-service-list-container">
                    <ul>
                        <li class="mob-sub-heading">Smart Cleaning</li>
                        <li><a href="" id="service-ul">Residential Cleaning</a></li>
                        <li><a href="" id="service-ul">Workplace Cleaning</a></li>
                        <li><a href="" id="service-ul">Specialized Services</a></li>
                        <li class="mob-sub-heading"><a href="">Pest Management</a></li>
                        <li class="mob-sub-heading">
                            <a href="">Disinfection & Sterilization</a>
                        </li>
                        <li class="mob-sub-heading">
                            <a href="">Water Hygiene Management</a>
                        </li>
                        <li class="mob-sub-heading">
                            <a href="">Space Beautification Services</a>
                        </li>
                    </ul>
                </div>
                <li><a href="">Products</a></li>
                <li>School</li>
            </ul>
        </div>

        <div class="greet-container d-flex align-items-center flex-column my-5 h-100">
            <img class="img-responsive mb-4" style="width: 10rem;" src="https://cleanmyplace.in/assets/images/logo.png" alt="" />
            <h1 class="font-weight-bold">Thank You!</h1>
            <p class="mb-5">We will get back to you shortly.</p>
            <h3>Follow Us On</h3>
            <div class="d-flex">
                <a href="" class="mx-1 my-2"><i style="color: #4267b2; font-size: 2rem;" class="fab fa-facebook-square"></i></a>
                <a href="" class="mx-1 my-2"><i style="color: #0077b5; font-size: 2rem;" class="fab fa-linkedin"></i></a>
                <a href="" class="mx-1 my-2"><i style="color: #00acee; font-size: 2rem;" class="fab fa-twitter-square"></i></a>
                <a href="" class="mx-1 my-2"><i style="color: #ff0000; font-size: 2rem;" class="fab fa-youtube-square"></i></a>
                <a href="" class="mx-1 my-2"><i style="color: #e800e4; font-size: 2rem;" class="fab fa-instagram-square"></i></a>
            </div>
        </div>
    </div>

</body>

</html>