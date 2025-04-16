<!DOCTYPE html>
<html lang="en">

<head>
<?php
include 'dashboard/conn/int.php';
$page_title = "El Fire || About US";
$home =null;
$about = "current";
$service = null;
$contact =null;
$projects = null;
include 'common-pages/static-sec.php';
echo $meta ;
?>  
</head>

<body class="custom-cursor">
<?php echo $header; ?>


        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/header2.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>About us</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span>/</span></li>
                        <li>About us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

           <!--About Four Start-->
           <section class="about-four">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-four__left">
                            <div class="about-four__shape-1 img-bounce">
                                <i class="fa fa-fire" style="color: #ED1C24;font-size:30px"></i>
                                <i class="fa fa-fire" style="color: #ED1C24;font-size:30px"></i>
                                <!-- <img src="assets/images/shapes/about-four-shape-1.png" alt=""> -->
                            </div>
                            <div class="about-four__img-box">
                                <div class="about-four__img">
                                    <img src="assets/images/gallery/about2.avif" alt="">
                                </div>
                                <!-- <div class="about-four__img-2">
                                    <img src="assets/images/gallery/corporate-business-handshake-business-partners.jpg" width="300px" alt="">
                                </div> -->
                                <div class="about-four__content">
                                    <h3>Quality Excellence,
                                        <br> Customer Delight
                                    </h3>
                                    <div class="about-four__icon">
                                        <span class="icon-cityscape"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-four__right">
                            <div class="section-title text-left">
                                <div class="section-title__icon">
                                    <span class="fa fa-fire"></span>
                                </div>
                                <span class="section-title__tagline">About Us</span>
                                <h2 class="section-title__title">Who Are We ?</h2>
                            </div>
                            <p class="about-four__text">At El Fire Company, we are dedicated to providing advanced fire safety solutions to protect what matters most to you. Our expertise spans a full spectrum of fire safety systems, including the latest in fire alarms, detection technology, and integrated access control systems. We specialize in designing and implementing tailored solutions that address the unique safety needs of each client, ensuring maximum protection for your assets, facilities, and personnel. With a commitment to innovation and reliability, El Fire Company is your trusted partner in creating safer, more secure environments.</p>
                            <ul class="about-four__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-angle-right"></span>
                                    </div>
                                    <div class="content">
                                        <h3>Fire fighting systems</h3>
                                       <p>specialize in Gas systems , Foam systems, Fire search , Kitchen hoad suppression systems and water suppression systems.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-angle-right"></span>
                                    </div>
                                    <div class="content">
                                        <h3>Fire alarm systems</h3>
                                        <p>specialize in conventional systems and addressable sysyems.</p>
                                    </div>
                                </li>
                            </ul>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Four End-->

           <!--News One Start-->
           <section class="news-one" id="news">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__icon">
                        <span class="fa fa-star"></span>
                    </div>
                    <span class="section-title__tagline">Systems</span>
                    <h2 class="section-title__title">We are specialized in <br>fire alram systems 
                        & fire fighting systems
                    </h2>
                </div>
                <div class="row">
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <div class="news-one__img">
                                    <img src="assets/images/blog/gas_system.jpg" style="width:370px;height:304px" alt="">
                                </div>
                            </div>
                            <div class="news-one__content">
                                <h3 class="news-one__title">Gas systems
                                </h3>
                                <div class="system_details">
                                    <ul>
                                        <li><i class="fa fa-fire"></i>  CO2 fire suppression system.</li>
                                        <li><i class="fa fa-fire"></i>  FM200 fire suppression system.</li>
                                        <li><i class="fa fa-fire"></i>  Novec fire suppression system.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <div class="news-one__img">
                                    <img src="assets/images/blog/foam.jpg" alt="">
                                </div>
                            </div>
                            <div class="news-one__content">
                                <h3 class="news-one__title">Foam systems
                                </h3>
                                <div class="system_details">
                                    <ul>
                                        <li><i class="fa fa-fire"></i>  Bladder system</li>
                                        <li><i class="fa fa-fire"></i>  Foam pump system.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End--> 
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <div class="news-one__img">
                                    <img src="assets/images/blog/kitchen.jpg" alt="">
                                </div>
                            </div>
                            <div class="news-one__content">
                                <h3 class="news-one__title">Kitchen hoad suppression system 
                                </h3>
                                <div class="system_details">
                                    <ul>
                                        <li><i class="fa fa-fire"></i>  Wet chemical.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <div class="news-one__img">
                                    <img src="assets/images/blog/water_sprinkler.jpg" style="width:370px;height:304px" alt="">
                                </div>
                            </div>
                            <div class="news-one__content">
                                <h3 class="news-one__title">Water suppression system 
                                </h3>
                                <div class="system_details">
                                    <ul>
                                        <li><i class="fa fa-fire"></i>  Fire pump.</li>
                                        <li><i class="fa fa-fire"></i>  Fire suppression sprinklers.</li>
                                        <li><i class="fa fa-fire"></i>  Fire suppression hose cabinet.</li>
                                        <li><i class="fa fa-fire"></i>  Fire fighting values.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <div class="news-one__img">
                                    <img src="assets/images/blog/fire_alarm_system.jpeg" alt="">
                                </div>
                            </div>
                            <div class="news-one__content">
                                <h3 class="news-one__title">Fire alarm systems
                                </h3>
                                <div class="system_details">
                                    <ul>
                                        <li><i class="fa fa-fire"></i>  Conventional system.</li>
                                        <li><i class="fa fa-fire"></i>  Addressable system.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                </div>
            </div>
        </section>
        <!--News One End-->

        <!--Counter Three Start-->
        <section class="counter-three">
            <div class="counter-two__bg" style="background-image: url(assets/images/backgrounds/medium-shot-man-developing-photos.jpg);">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__icon">
                        <span class="fa fa-fire"></span>
                    </div>
                    <span class="section-title__tagline">We are the best choice</span>
                    <h2 class="section-title__title">We help you solve your
                      problems by our  <br>  fire alarm systems and fire fighting systems</h2>
                </div>
                
            </div>
        </section>
        <!--Counter Three End-->

       

        

        

<?php 
echo $footer;
?>