<?php
echo '<script>
        function optimizeImage(image, maxWidth, maxHeight, quality) {
            const canvas = document.createElement("canvas");
            const ctx = canvas.getContext("2d");

            const originalWidth = image.width;
            const originalHeight = image.height;

            let targetWidth = originalWidth;
            let targetHeight = originalHeight;

            if (originalWidth > maxWidth || originalHeight > maxHeight) {
                if (originalWidth > originalHeight) {
                    targetWidth = maxWidth;
                    targetHeight = Math.round(originalHeight * (maxWidth / originalWidth));
                } else {
                    targetHeight = maxHeight;
                    targetWidth = Math.round(originalWidth * (maxHeight / originalHeight));
                }
            }

            canvas.width = targetWidth;
            canvas.height = targetHeight;
            ctx.drawImage(image, 0, 0, targetWidth, targetHeight);

            return canvas.toDataURL("image/jpep", quality);
        }

        function optimizeAllImages(maxWidth = 800, maxHeight = 800, quality = 0.7) {
            const images = document.querySelectorAll("img");

            images.forEach(img => {
                const originalSrc = img.src;
                const optimizedDataUrl = optimizeImage(img, maxWidth, maxHeight, quality);

                // You can replace the original image with the optimized one or log the optimized data URL
                img.src = optimizedDataUrl;

                // If you want to download the optimized image, uncomment the line below
                // downloadImage(optimizedDataUrl, "optimized-" + originalSrc.split("/").pop());
            });
        }

        function downloadImage(dataUrl, filename) {
            const link = document.createElement("a");
            link.href = dataUrl;
            link.download = filename;
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }

        // Run the optimization when the window loads
        window.onload = function() {
            optimizeAllImages();
        }
    </script>';
$meta = '
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>'.$page_title.'</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/Logo/Without_bg.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/Logo/Without_bg.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/Logo/Without_bg.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="ElFire Company" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
        <script src="https://kit.fontawesome.com/cd551445d0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/govity-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css" />
    <link rel="stylesheet" href="assets/vendors/nice-select/nice-select.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/elfire.css" />
    <link rel="stylesheet" href="assets/css/elfire-responsive.css" />
    <link rel="stylesheet" href="assets/css/elfire.css" media="print" onload="this.media="all">
    <noscript><link rel="stylesheet" href="assets/css/elfire.css"></noscript>
' ;

$header = '
<div class="custom-cursor__cursor"></div>
<div class="custom-cursor__cursor-two"></div>





<!-- <div class="preloader">
    <div class="preloader__image"></div>
</div> -->
<!-- /.preloader -->


<div class="page-wrapper">
    <header class="main-header-three">
        <div class="main-header-three__top">
            <div class="container">
                <div class="main-header-three__top-inner">
                    <div class="main-header-three__logo">
                        <a href="index.php"><img src="assets/images/Logo/Without_bg.png" width="150" alt=""></a>
                    </div>
                    <div class="main-header-three__content-box">
                        <ul class="list-unstyled main-header-three__contact-list">
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:Info@elfire-fighting.com">Info@elfire-fighting.com</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="text">
                                    <p>Open hours: Sun - Thu 9.00 am - 5.00 pm</p>
                                </div>
                            </li>
                        </ul>
                        <div class="main-header-three__search-lan-switcher-btn">
                            <div class="main-header-three__btn-box">
                                <a href="contact.php" class="thm-btn main-header-three__btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-menu main-menu-three">
            <div class="main-menu-three__wrapper">
                <div class="container">
                    <div class="main-menu-three__wrapper-inner">
                        <div class="main-menu-three__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                               <li><a href="index.php"><img src="assets/images/Logo/Without_bg.png" width="150" alt=""></a></li>

                                <li class="megamenu '.$home.'">
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="'.$about.'">
                                    <a href="about.php">About Us</a>
                                </li>
                                <li class="'.$service.'"> 
                                    <a href="our-services.php">Services</a>
                                </li>
                                <li class="'.$projects.'">
                                    <a href="portfolio.php">Projects</a>
                                </li>       
                                <li class="'.$contact.'">
                                    <a href="contact.php">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="main-menu-three__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="stricky-header stricked-menu main-menu main-menu-three">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->
';

$footer ='

<!--Site Footer Start-->
<footer class="site-footer">
    <div class="container">
        <div class="site-footer__middle">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__Contact">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">Contact</h3>
                        </div>
                        <p class="footer-widget__Contact-text">88 El-Sayed El-Merghany,<br> El-Montaza, Heliopolis, Cairo Governorate 11757
                        </p>
                        <ul class="footer-widget__Contact-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:Info@elfire-fighting.com">Info@elfire-fighting.com</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fas fa-phone-square"></span>
                                </div>
                                <div class="text">
                                    <p><a href="tel:+201001950692">+20 100 195 0692</a></p>
                                </div>
                            </li>
                        </ul>
                        <!-- <div class="site-footer__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__link">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">Links</h3>
                        </div>
                        <ul class="footer-widget__link-list list-unstyled">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="our-services.php">Services</a></li>
                            <li><a href="portfolio.php">Projects</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
              
                
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <p class="site-footer__bottom-text">©2024 El Fire. ALL rights reserved || Created by <a href="https://teratronics.tech/">TeraTronics</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer End-->


</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
<div class="mobile-nav__overlay mobile-nav__toggler"></div>
<!-- /.mobile-nav__overlay -->
<div class="mobile-nav__content">
    <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

    <div class="logo-box">
        <a href="index.php" aria-label="logo image"><img src="assets/images/Logo/Without_bg.png" width="94"
                alt="" /></a>
    </div>
    <!-- /.logo-box -->
    <div class="mobile-nav__container"></div>
    <!-- /.mobile-nav__container -->

    <ul class="mobile-nav__contact list-unstyled">
        <li>
            <i class="fa fa-envelope"></i>
            <a href="mailto:Info@elfire-fighting.com">Info@elfire-fighting.com</a>
        </li>
        <li>
            <i class="fa fa-phone-alt"></i>
            <a href="tel:+201001950692">+20 100 195 0692</a>
        </li>
    </ul><!-- /.mobile-nav__contact -->
   <!--  <div class="mobile-nav__top">
        <div class="mobile-nav__social">
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-facebook-square"></a>
            <a href="#" class="fab fa-pinterest-p"></a>
            <a href="#" class="fab fa-instagram"></a>
        </div>
    </div> -->



</div>
<!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->


<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>


<script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendors/jarallax/jarallax.min.js"></script>
<script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="assets/vendors/nouislider/nouislider.min.js"></script>
<script src="assets/vendors/odometer/odometer.min.js"></script>
<script src="assets/vendors/swiper/swiper.min.js"></script>
<script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
<script src="assets/vendors/wnumb/wNumb.min.js"></script>
<script src="assets/vendors/wow/wow.js"></script>
<script src="assets/vendors/isotope/isotope.js"></script>
<script src="assets/vendors/countdown/countdown.min.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="assets/vendors/vegas/vegas.min.js"></script>
<script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
<script src="assets/vendors/timepicker/timePicker.js"></script>
<script src="assets/vendors/circleType/jquery.circleType.js"></script>
<script src="assets/vendors/circleType/jquery.lettering.min.js"></script>
<script src="assets/vendors/nice-select/jquery.nice-select.min.js"></script>

<script>
import Compressor from "compressorjs";

new Compressor(file, {
  quality: 0.8,
  success(result) {
    console.log(result);
  },
});
</script>


<!-- template js -->
<script src="assets/js/govity.js"></script>
</body>

</html>';
?>