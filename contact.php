<!DOCTYPE html>
<html lang="en">

<head>
<?php
$page_title = "El Fire || Contact Us";
$home =null;
$about = null;
$service = null;
$contact = "currrent";
$projects = null;
include 'common-pages/static-sec.php';
echo $meta ;
?>
</head>

<body class="custom-cursor">
<?php 
echo $header;
?>

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/header2.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Contact</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span>/</span></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="contact-page__top">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__left">
                                <div class="contact-page__img-box">
                                    <div class="contact-page__img">
                                        <img src="assets/images/backgrounds/contact2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__right">
                                <div class="section-title text-left">
                                    <div class="section-title__icon">
                                        <span class="fa fa-fire"></span>
                                    </div>
                                    <span class="section-title__tagline">El Fire company</span>
                                    <h2 class="section-title__title">Get in touch now</h2>
                                </div>
                                <p class="contact-page__text">For inquiries, reach out to us today. Your safety is our priority, and we're here to help.</p>
                                <ul class="list-unstyled contact-page__contact-list">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-telephone"></span>
                                        </div>
                                        <div class="content">
                                            <p>Have any Question?</p>
                                            <h4><a href="tel:+201001950692">+20 100 195 0692</a></h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-email"></span>
                                        </div>
                                        <div class="content">
                                            <p>Write Email</p>
                                            <h4><a href="mailto:Info@elfire-fighting.com">Info@elfire-fighting.com</a></h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pin"></span>
                                        </div>
                                        <div class="content">
                                            <p>Visit Anytime</p>
                                            <h4>88 El-Sayed El-Merghany,<br> El-Montaza, Heliopolis, Cairo Governorate.</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-page__bottom">
                    <div class="contact-page__bottom-left">
                        <div class="contact-page__bottom-icon">
                            <span class="icon-clock"></span>
                        </div>
                        <ul class="contact-page__bottom-content list-unstyled">
                            <li>
                                <span>Sun - Thu</span>
                                <p>9:00 am to 5 pm</p>
                            </li>
                        </ul>
                    </div>
                    <!--<div class="contact-page__bottom-right">-->
                    <!--    <div class="contact-page__social">-->
                    <!--        <div class="contact-page__social-shape-1 float-bob-x">-->
                    <!--            <img src="assets/images/shapes/contact-page-shape-1.png" alt="">-->
                    <!--        </div>-->
                    <!--        <span>Social Media</span>-->
                    <!--        <a href="#"><i class="fab fa-twitter"></i></a>-->
                    <!--        <a href="#"><i class="fab fa-facebook"></i></a>-->
                    <!--        <a href="#"><i class="fab fa-pinterest-p"></i></a>-->
                    <!--        <a href="#"><i class="fab fa-instagram"></i></a>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </section>
        <!--Contact Page End-->

        <!--Google Map Start-->
        <section class="google-map">
            <iframe
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3452.316884927064!2d31.325933475555114!3d30.085109674903116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzDCsDA1JzA2LjQiTiAzMcKwMTknNDIuNiJF!5e0!3m2!1sen!2seg!4v1715452672827!5m2!1sen!2seg"
                class="google-map__one" allowfullscreen></iframe>

        </section>
        <!--Google Map End-->

        <!--Contact One Start-->
        <section class="contact-one">
            <div class="contact-one__bg" style="background-image: url(assets/images/backgrounds/contact-one-bg.png);">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__icon">
                        <span class="fa fa-fire"></span>
                    </div>
                    <span class="section-title__tagline">contact us</span>
                    <h2 class="section-title__title">Feel free to get in touch
                        <br> with El Fire company</h2>
                </div>
                <div class="contact-one__form-box">
                    <form class="contact-one__form contact-form-validated" onsubmit="contact()"
                        novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="contact-one__input-box">
                                    <input type="text" placeholder="Your Name" name="name" id="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-one__input-box">
                                    <input type="email" placeholder="Email Address" name="email" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact-one__input-box text-message-box">
                                    <textarea name="message" placeholder="Write Comment" id="msg"></textarea>
                                </div>
                                <div class="contact-one__btn-box">
                                    <button type="submit" class="thm-btn contact-one__btn">Send a
                                        Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="result"></div>
                </div>
            </div>
        </section>
        <!--Contact One End-->
        <script>
            function contact() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var msg = document.getElementById("msg").value;

            var url = "https://wa.me/+201001950692?text=" +
                "Contact El Fire Company" +"%0a"+
                "*Name*: " + name + "%0a" +
                "*Email*: " + email + "%0a" +
                "*Your message*: " + msg ;

            window.open(url, '_blank').focus();
            }
          </script>

<?php 
    echo $footer;
?>