        <div class="footer-outer-container">
            <div class="footer-hero">
                <!-- <h4>From the founder’s desk</h4> -->
                <p>Dr. AgriVet is India’s first Online Livestock Health Care Advisory Platform – the first of its
                    kind to serve the Livestock Farmers. Technology driven, Non-Physical, Real Time, Expert Health Care
                    advisory for Livestock farmers of urban and rural.</p>
            </div>
            <div class="footer-inner-container">
                <div class="footer-content">
                    <h3>Subscribe for newsletter</h3>
                    <p>It is a free online monthly newsletter, published on 1st Friday of every month on
                        www.dragrivet.com website and Dr Agrivet mobile app. To subscribe and get access to the past
                        issues, fill-up your mail ID or login to our free application Dr. Agrivet. The newsletter is
                        a platform for news from South Asian countries on Poultry farming, livestock industry, aquaculture
                        industry and new research updates.
                    </p>
                    <form id="newsletter-form">
                        <input type="text" placeholder="Email Address" name="news_email" id="news-email">
                        <button class="form-btn" id="newsletter-btn">SUBSCRIBE</button>
                    </form>
                    <h4>Stay connected with us</h4>
                    <ol>
                        <li><a><img src="./assets/logo/twitter.svg" alt=""></a></li>
                        <li><a><img src="./assets/logo/instagram.svg" alt=""></a></li>
                        <li><a href="https://www.facebook.com/dragrivet/"><img src="./assets/logo/facebook.svg" alt=""></a></li>
                        <li><a><img src="./assets/logo/youtube.svg" alt=""></a></li>
                    </ol>
                    <hr>
                    <p class="footer-end-content">Developed, Owned and Operated by Dr Agrivet Advisory LLP</p>
                </div>

                <div class="footer-form" id="footer-form">
                    <form id="enquiry-form">
                        <h2>Enqiury</h2>
                        <input type="text" class="form-control" id="vstr_nm" name="vstr_nm" onkeypress="validateName(event)" placeholder="Enter your name" />
                        <input type="email" class="form-control" id="vstr_email" name="vstr_email" onblur="validateEmail(event)" placeholder="Enter email" />
                        <div class="contact-input-cont">
                            <input type="text" class="form-control" style="margin-right: 0.5rem; width: 25%" id="vstr_cntry_code" onkeypress="validateCountryCode(event)" name="vstr_cntry_code" value="+91" />
                            <input type="text" pattern="[0-9-]+" class="form-control" id="vstr_cntct_no" onkeypress="validateNumber(event)" name="vstr_cntct_no" placeholder="Enter your contact number" />
                        </div>
                        <input type="text" class="form-control not-reqd" id="vstr_alt_cntct_no" onkeypress="validateNumber(event)" name="vstr_alt_cntct_no" placeholder="Enter alternate contact number" />
                        <textarea placeholder="Enquiry Details`" name="vstr_note" id="en-details" cols="30" rows="3"></textarea>
                        <div class="captch-cont">
                            <input type="text" class="form-control" id="verify_captcha" name="verify_captcha" />
                            <div style="display: flex;">
                                <img id="captcha-img" src="./includes/api/captcha.php" alt="">
                                <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_eh8qtsvg.json" background="transparent" speed="1" onclick="reloadCaptcha(event)" style="height: 1.8rem; width: fit-content" id="reload-captcha"></lottie-player>
                            </div>
                        </div>

                    </form>
                    <button class="form-btn" id="enquiry-btn">SUBSCRIBE</button>
                </div>
            </div>
        </div>

        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js" integrity="sha512-2fk3Q4NXPYAqIha0glLZ2nluueK43aNoxvijPf53+DgL7UW9mkN+uXc1aEmnZdkkZVvtJZltpRt+JqTWc3TS3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="./js/jquery.viewbox.min.js"></script>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <script src="https://unpkg.com/@lottiefiles/lottie-interactivity@latest/dist/lottie-interactivity.min.js"></script>
        <script>
            AOS.init();
        </script>
        <script src="./js/script.js"></script>
        </body>

        </html>