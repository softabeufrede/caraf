<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>LA CARAF|| LE PAYS AKYE</title>

    <link rel="apple-touch-icon" sizes="57x57" href="<?php bs() ?>public/siteweb/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bs() ?>public/siteweb/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bs() ?>public/siteweb/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bs() ?>public/siteweb/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bs() ?>public/siteweb/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bs() ?>public/siteweb/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bs() ?>public/siteweb/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bs() ?>public/siteweb/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bs() ?>public/siteweb/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php bs() ?>public/siteweb/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bs() ?>public/siteweb/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php bs() ?>public/siteweb/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bs() ?>public/siteweb/img/favicon/favicon-16x16.png">

    <meta name="msapplication-TileColor" content="#ffffff">

    <meta name="theme-color" content="#ffffff">

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="<?php bs() ?>public/siteweb/css/style.css">
    <!-- responsive stylesheet -->
    <link rel="stylesheet" href="<?php bs() ?>public/siteweb/css/responsive.css">



</head>
<body class="page-wrapper">


<section class="top-bar">
    <div class="container">

        <div class="left-text pull-left">
            <p><span>Support:</span> info@caraf.com</p>
        </div> <!-- /.left-text -->

        <div class="social-icons pull-right">
            <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li> -->
            </ul>
        </div> <!-- /.social-icons -->
    </div>
</section> <!-- /.top-bar -->

 <!-- /.header -->


<?php include_once("menu.php") ;?> <!-- /.mainmenu-area -->


<section class="inner-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 sec-title colored text-center">
                <h2>LE PAYS AKYE</h2>
                <ul class="breadcumb">
                    <li><a href="<?php echo base_url()?>">Accueil</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li><span>LA CARAF--> le pays</span></li>
                </ul>
                <span class="decor"><span class="inner"></span></span>
            </div>
        </div>
    </div>
</section>


<section class="sec-padding about-content full-sec">
    <div class="container">
        <div class="row">

            <?php foreach($page_lepays as $page_cont):?>
                <div class="col-lg-7 col-md-12">
                    <img class="full-width" width="40%" src="<?php bs() ?>uploads/<?php echo $page_cont->image ?>" alt="Awesome Image"/>
                </div>

                <div class="col-lg-5 col-md-12">
                    <div class="full-sec-content">
                        <div class="sec-title style-two">
                            <h2><?php  echo $page_cont->title?></h2>
							<span class="decor">
								<span class="inner"></span>
							</span>
                        </div>
                        <h3><?php  echo $page_cont->title_1?></h3>
                        <!--                    <br>-->
                        <!--                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem loremIpsum has been the industry's </p>-->
                        <br>
                        <p> <?php  echo $page_cont->content?></p>
                    </div>
                </div>
            <?php endforeach ?>

        </div>
    </div>
</section>


<section class="call-to-action call-action-style">
    <div class="container">
        <div class="clearfix">

        </div>
    </div>
</section>



<!--<section class="fact-counter-wrapper sec-padding parallax-section">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-6 col-md-12 fact-inner">-->
<!--                <h2>Des statistique qui parles <b></h2>-->
<!--                <a href="#" class="thm-btn inverse">Nous réjoindre</a>-->
<!--            </div>-->
<!--            <div class="col-lg-6 col-md-12 md-text-center">-->
<!--                <div class="single-fact">-->
<!--                    <div class="icon-box">-->
<!--                        <i class="flaticon-shapes-2"></i>-->
<!--                    </div>-->
<!--                    <span class="timer" data-from="10" data-to="365" data-speed="5000" data-refresh-interval="50">365</span>-->
<!--                    <p>Total Awards</p>-->
<!--                </div>-->
<!--                <div class="single-fact">-->
<!--                    <div class="icon-box">-->
<!--                        <i class="flaticon-people-3"></i>-->
<!--                    </div>-->
<!--                    <span class="timer" data-from="10" data-to="2200" data-speed="5000" data-refresh-interval="50">155</span>-->
<!--                    <p>Total Volunteer</p>-->
<!--                </div>-->
<!--                <div class="single-fact">-->
<!--                    <div class="icon-box">-->
<!--                        <i class="flaticon-hands"></i>-->
<!--                    </div>-->
<!--                    <span class="timer" data-from="10" data-to="155" data-speed="5000" data-refresh-interval="50">2200</span>-->
<!--                    <p>Total Projects</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->


<!-- <section class="overlay-white sec-padding parallax-section sec-padding89">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 promote-project style-inner text-center">
                <h3>Save Children From Hunger</h3>
                <div class="sec-title colored text-center">
                    <span class="decor">
                        <span class="inner"></span>
                    </span>
                </div>
                <h2>Became a part of the world lorem ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam quaerat atque, dolore. Amido ipsum dolor sit amet, consectetur adipisicing elit. Numquam quaerat atque, dolore.Lorem ipsum dolor sit amet, consectetur.</p>
                <a href="#" class="thm-btn">Je participe</a>
                <a href="#" class="thm-btn inverse">En savoir plus</a>
            </div>
        </div>
    </div>
</section> -->


<?php include_once("footer.php") ;?>