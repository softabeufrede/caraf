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

   <script src="<?= bs('public/js/jquery.js') ?>"></script>

<link rel="stylesheet" href="<?php echo base_url() ?>public/fullcalendar-3.10.0/fullcalendar.min.css" />
               <script src="<?php echo base_url() ?>public/fullcalendar-3.10.0/lib/moment.min.js"></script>
               <script src="<?php echo base_url() ?>public/fullcalendar-3.10.0/fullcalendar.min.js"></script>
               <script src="<?php echo base_url() ?>public/fullcalendar-3.10.0/gcal.js"></script>
               <script src='<?php echo base_url() ?>public/fullcalendar-3.10.0//locale/fr.js'></script>
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
                <h2>Mon Agenda</h2>
                <ul class="breadcumb">
                    <li><a href="<?php echo base_url()?>">Accueil</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li><span>LA CARAF</span></li>
                </ul>
                <span class="decor"><span class="inner"></span></span>
            </div>
        </div>
    </div>
</section>


<section class="sec-padding about-content full-sec">
    <div class="container">
        <div class="row">

            
            <div class="col-lg-12 col-md-12">
            <?php view("calendar/calendrier/monagenda"); ?>
                
            </div>

        </div>
    </div>
</section>


<section class="call-to-action call-action-style">
    <div class="container">
        <div class="clearfix">

        </div>
    </div>
</section>



<section class="fact-counter-wrapper sec-padding parallax-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 fact-inner">
                <h2>Des statistique qui parles <b></h2>
                <a href="#" class="thm-btn inverse">Nous réjoindre</a>
            </div>
            <div class="col-lg-6 col-md-12 md-text-center">
                <div class="single-fact">
                    <div class="icon-box">
                        <i class="flaticon-shapes-2"></i>
                    </div>
                    <span class="timer" data-from="10" data-to="365" data-speed="5000" data-refresh-interval="50">365</span>
                    <p>Total Awards</p>
                </div>
                <div class="single-fact">
                    <div class="icon-box">
                        <i class="flaticon-people-3"></i>
                    </div>
                    <span class="timer" data-from="10" data-to="2200" data-speed="5000" data-refresh-interval="50">155</span>
                    <p>Total Volunteer</p>
                </div>
                <div class="single-fact">
                    <div class="icon-box">
                        <i class="flaticon-hands"></i>
                    </div>
                    <span class="timer" data-from="10" data-to="155" data-speed="5000" data-refresh-interval="50">2200</span>
                    <p>Total Projects</p>
                </div>
            </div>
        </div>
    </div>
</section>


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




<section class="bg-color-thm p_35">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="clients-carousel owl-carousel owl-theme">
                    <div class="item">
                        <div class="img-box">
                            <img src="<?php bs() ?>public/siteweb/img/clients/logo-1.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box">
                            <img src="<?php bs() ?>public/siteweb/img/clients/logo-2.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box">
                            <img src="<?php bs() ?>public/siteweb/img/clients/logo-3.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box">
                            <img src="<?php bs() ?>public/siteweb/img/clients/logo-4.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box">
                            <img src="<?php bs() ?>public/siteweb/img/clients/logo-5.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box">
                            <img src="<?php bs() ?>public/siteweb/img/clients/logo-1.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="<?php bs() ?>public/siteweb/img-box">
                            <img src="<?php bs() ?>public/siteweb/img/clients/logo-2.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box">
                            <img src="<?php bs() ?>public/siteweb/img/clients/logo-3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="footer sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer-widget about-widget">
                    <a href="#">
                        <img src="<?php bs() ?>public/siteweb/img/resources/logo_caraf.png" alt="Awesome Image"/>
                    </a>
                    <p>Lorem ipsum dolor sit amet, eu me evert laboramus, iudico </p>
                    <ul class="contact">
                        <li><i class="fa fa-map-marker"></i> <span>60 Grant Ave. Carteret NJ 0708</span></li>
                        <li><i class="fa fa-phone"></i> <span>(880) 1723801729</span></li>
                        <li><i class="fa fa-envelope-o"></i> <span>example@gmail.com</span></li>
                    </ul>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-6">
                <div class="footer-widget quick-links">
                    <h3 class="title">Pages</h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Causes</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Archives</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 latest-post col-sm-6">
                <div class="footer-widget latest-post">
                    <h3 class="title">Latest News</h3>
                    <ul>
                        <li>
                            <span class="border"></span>
                            <div class="content">
                                <a href="#">If you need a crown or lorem an implant you will pay it </a>
                                <span>July 2, 2014</span>
                            </div>
                        </li>
                        <li>
                            <span class="border"></span>
                            <div class="content">
                                <a href="#">If you need a crown or lorem an implant you will pay it </a>
                                <span>July 2, 2014</span>
                            </div>
                        </li>
                        <li>
                            <span class="border"></span>
                            <div class="content">
                                <a href="#">If you need a crown or lorem an implant you will pay it </a>
                                <span>July 2, 2014</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="footer-widget contact-widget">
                    <h3 class="title">Contact Form</h3>
                    <form action="http://hasan.themexlab.com/new/lillah-fund-html/inc/sendemail.php" class="contact-form" id="footer-cf">
                        <input type="text" name="name"  placeholder="Full Name">
                        <input type="text" name="email" placeholder="Email Address" >
                        <textarea name="message" placeholder="Your Message"></textarea>
                        <button type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>


<section class="footer-bottom">
    <div class="container text-center">
        <p>Created By <a href="http://www.sweet-comm.com" target="_blank"> Sweet-Comm </a> Soluion Provider</p>
    </div>
</section>

<!--Scroll to top-->
<div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>


 <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?= bs('public/js/bootstrap.min.js') ?>"></script>
    <script class="include" type="text/javascript" src="<?= bs('public/js/jquery.dcjqaccordion.2.7.js') ?>"></script>
    <script src="<?= bs('public/js/jquery.scrollTo.min.js') ?>"></script>
    <script src="<?= bs('public/js/jquery.nicescroll.js') ?>" type="text/javascript"></script>
    <script src="<?= bs('public/js/jquery.sparkline.js') ?>" type="text/javascript"></script>
    <script src="<?= bs('public/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') ?>"></script>
    <script src="<?= bs('public/js/owl.carousel.js') ?>" ></script>
    <script src="<?= bs('public/js/jquery.customSelect.min.js') ?>" ></script>
    <script type="text/javascript" language="javascript" src="<?php bs() ?>public/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?php bs() ?>public/assets/data-tables/DT_bootstrap.js"></script>
    <script src="<?= bs('public/js/respond.min.js') ?>" ></script>

    <!--right slidebar-->
    <script src="<?= bs('public/js/slidebars.min.js') ?>"></script>

    <!--common script for all pages-->
    <script src="<?= bs('public/js/common-scripts.js') ?>"></script>

    <!--dynamic table initialization -->
    <script src="<?php bs() ?>public/js/dynamic_table_init.js"></script>

    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>

  <script src="<?= base_url('public/js/bootstrap-notify.js') ?>"></script>

    <!--Form Wizard-->
  <script src="<?php bs() ?>public/js/jquery.steps.min.js" type="text/javascript"></script>
  <script src="<?php bs() ?>public/js/jquery.validate.min.js" type="text/javascript"></script>

   <!--script for this page-->
    <script src="<?php bs() ?>public/js/jquery.stepy.js"></script>
    
    <script src="<?php bs() ?>public/assets/jquery-knob/js/jquery.knob.js"></script>
    
    <script src="<?php bs() ?>public/assets/jquery-knob/js/jquery.knob.js"></script>
     <link rel="stylesheet" href="<?php echo base_url() ?>public/fullcalendar-3.10.0/fullcalendar.min.css" />
               <script src="<?php echo base_url() ?>public/fullcalendar-3.10.0/lib/moment.min.js"></script>
               <script src="<?php echo base_url() ?>public/fullcalendar-3.10.0/fullcalendar.min.js"></script>
               <script src="<?php echo base_url() ?>public/fullcalendar-3.10.0/gcal.js"></script>
               <script src='<?php echo base_url() ?>public/fullcalendar-3.10.0//locale/fr.js'></script>
<script type="text/javascript">
$(document).ready(function() {
   $('#calendar').fullCalendar({
     eventSources: [
         {
             events: function(start, end, timezone, callback) {
                 $.ajax({
                 url: '<?php echo base_url() ?>calendar/get_events',
                 dataType: 'json',
                 data: {
                 // our hypothetical feed requires UNIX timestamps
                 start: start.unix(),
                 end: end.unix()
                 },
                 success: function(msg) {
                     var events = msg.events;
                     callback(events);
                 }
                 });
             }
         },
     ],dayClick: function(date, jsEvent, view) {
        date_last_clicked = $(this);
        $(this).css('background-color', '#bed7f3');
        $('#addModal').modal();
    },
 });
        

    
});
</script>

<!-- thm custom script -->
<script src="<?php bs() ?>public/siteweb/js/custom.js"></script>
</body>
</html>