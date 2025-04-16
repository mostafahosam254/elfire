<!DOCTYPE html>
<html lang="en">

<head>
<?php
include 'dashboard/conn/int.php';
$page_title = "El Fire || Our portfolio" ;
$home =null;
$about = null;
$service = null;
$contact = null;
$projects = "cuurent";
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
                    <h2>Portfolio</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span>/</span></li>
                        <li>Portfolio</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

 
        
          <!--Departments Page Start-->
        <section class="department-page">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__icon">
                        <span class="fa fa-star"></span>
                    </div>
                    <span class="section-title__tagline">Our Projects</span>
                    <h2 class="section-title__title">Your project is safe with us</h2>
                </div>
                <div class="row">
                    <?php
                                    
                                    $sel=$conn->prepare("SELECT * FROM portfolio");
                                    $sel->execute();
                                foreach ($sel as $sq) {
                                    // $fileUn="data:".$sq['fileType'].";base64".base64_encode($sq['file']);
                                    $fileUn="data:".$sq['file_Type'].";base64,".base64_encode($sq['file']);
                                    // echo '<a href="'.$fileUn.'">الصوره<a/><br/>';
                                    echo '
                    <!--Department Two Single Start-->
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="department-two__single">
                            <div class="department-two__img-box">
                                <div class="department-two__img">
                                    <img src="'.$fileUn.'" alt="" style="width:270px;height:355px">
                                </div>
                                <div class="department-two__content">
                                    <h3 class="department-two__title" style="color:#ed1c24">'.$sq['name'].'</h3>
                                </div>
                                <div class="department-two__content-two">
                                    <h3 class="department-two__title-two" style="color:#ed1c24">'.$sq['name'].'</h3>
                                    <p class="department-two__text"><b>Location:</b>'.$sq['location'].'
                                    <br>
                                    <b>Cansultant:</b> '.$sq['Cansultant'].'
                                    <br>
                                    <b>Scope :</b> '.$sq['scope'].'
                                    <br>
                                    <b>Owner:</b> '.$sq['owner'].'</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Department Two Single End-->';}?>
                </div>
            </div>
        </section>
        <!--Departments Page End-->
        
<?php 
    echo $footer;
?>