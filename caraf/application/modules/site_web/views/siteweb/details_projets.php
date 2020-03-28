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
                <h2>Caraf DETAILS PROJET</h2>
                <ul class="breadcumb">
                    <li><a href="<?php echo base_url()?>">Accueil</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li><span>LA CARAF --> DETAILS PROJET </span></li>
                </ul>
                <span class="decor"><span class="inner"></span></span>
            </div>
        </div>
    </div>
</section>


<section class="blog-home sec-padding blog-page blog-details">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 pull-left pull-sm-none">

                <?php //foreach ($projets_by_id as $projet): ?>
                <div class="single-blog-post">
                    <div class="img-box">
                        <img src="<?php bs() ?>uploads/<?php echo $projets_by_id->image ?>" alt="" width="780" height="400">
                    </div>
                    <div class="content-box">
                        <div class="date-box">
<!--                            <div class="inner">-->
<!--                                <div class="date">-->
<!--                                    <b>24</b>-->
<!--                                    apr-->
<!--                                </div>-->
<!--                                <div class="comment">-->
<!--                                    <i class="flaticon-interface-1"></i> 8-->
<!--                                </div>-->
<!--                            </div>-->
                        </div>
                        <div class="content">
                            <a href="#"><h3><?php echo $projets_by_id->title ?></h3></a>
                            <p><?php echo $projets_by_id->content ?></p>
                            <div class="bottom-box clearfix">
<!--                                <span class="pull-left">Tag: <a href="#">child, charity</a></span>-->
                                <ul class="pull-right share">
                                    <li><span>Share: </span></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php //endforeach ?>
<!--                <div class="admin-info">-->
<!--                    <div class="img-box">-->
<!--                        <div class="inner-box">-->
<!--                            <img src="img/blog-page/admin.jpg" alt="Awesome Image"/>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="content">-->
<!--                        <h3>Rashed kabir</h3>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>-->
<!--                        <ul class="social">-->
<!--                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>-->
<!--                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
<!--                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="comment-box">-->
<!--                    <div class="title">-->
<!--                        <h2>2 Comments</h2>-->
<!--                    </div>-->
<!--                    <div class="single-comment-box">-->
<!--                        <div class="img-box">-->
<!--                            <div class="inner-box">-->
<!--                                <img src="img/blog-page/comment1.jpg" alt="">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="content-box">-->
<!--                            <h3>Jhon Chena</h3>-->
<!--                            <div class="meta-box clearfix">-->
<!--                                <span class="pull-left">24 Feb, 2015 at 2:40pm</span>-->
<!--                                <a href="#" class="reply pull-right">Reply</a>-->
<!--                            </div>-->
<!--                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lore Ipsum has been the eloi industry's standard dummy text ever since the 1500s,</p>-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="single-comment-box">-->
<!--                        <div class="img-box">-->
<!--                            <div class="inner-box">-->
<!--                                <img src="img/blog-page/comment1.jpg" alt="">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="content-box">-->
<!--                            <h3>Jhon Chena</h3>-->
<!--                            <div class="meta-box clearfix">-->
<!--                                <span class="pull-left">24 Feb, 2015 at 2:40pm</span>-->
<!--                                <a href="#" class="reply pull-right">Reply</a>-->
<!--                            </div>-->
<!--                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lore Ipsum has been the eloi industry's standard dummy text ever since the 1500s,</p>-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="single-comment-box">-->
<!--                        <div class="img-box">-->
<!--                            <div class="inner-box">-->
<!--                                <img src="img/blog-page/comment1.jpg" alt="">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="content-box">-->
<!--                            <h3>Jhon Chena</h3>-->
<!--                            <div class="meta-box clearfix">-->
<!--                                <span class="pull-left">24 Feb, 2015 at 2:40pm</span>-->
<!--                                <a href="#" class="reply pull-right">Reply</a>-->
<!--                            </div>-->
<!--                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lore Ipsum has been the eloi industry's standard dummy text ever since the 1500s,</p>-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="single-comment-box">-->
<!--                        <div class="img-box">-->
<!--                            <div class="inner-box">-->
<!--                                <img src="img/blog-page/comment1.jpg" alt="">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="content-box">-->
<!--                            <h3>Jhon Chena</h3>-->
<!--                            <div class="meta-box clearfix">-->
<!--                                <span class="pull-left">24 Feb, 2015 at 2:40pm</span>-->
<!--                                <a href="#" class="reply pull-right">Reply</a>-->
<!--                            </div>-->
<!--                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lore Ipsum has been the eloi industry's standard dummy text ever since the 1500s,</p>-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="comment-form contact-content">-->
<!--                    <h2>Leave a Comment</h2>-->
<!--                    <form action="http://hasan.themexlab.com/new/lillah-fund-html/inc/sendemail.php" class="contact-form row" id="contact-page-contact-form">-->
<!--                        <div class="col-md-6">-->
<!--                            <input type="text" name="name" placeholder="Name">-->
<!--                            <input type="text" name="email" placeholder="Email">-->
<!--                            <input type="text" name="phone" placeholder="Phone">-->
<!--                        </div>-->
<!--                        <div class="col-md-6">-->
<!--                            <textarea name="message" placeholder="Message" cols="30" rows="10"></textarea>-->
<!--                        </div>-->
<!--                        <div class="col-md-12">-->
<!--                            <button class="thm-btn" type="submit">Send</button>-->
<!--                        </div>-->
<!--                    </form>-->
<!--                </div>-->

            </div>
<!--            <div class="col-md-4 col-sm-12 sidebar-inner pull-right pull-sm-none">-->
<!--                <div class="side-bar-widget">-->
<!--                    <div class="single-sidebar-widget search">-->
<!--                        <form action="#">-->
<!--                            <input type="text" placeholder="Search">-->
<!--                            <button type="submit"><i class="fa fa-search"></i></button>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                    <div class="single-sidebar-widget category">-->
<!--                        <h3 class="title">Catagories</h3>-->
<!--                        <ul>-->
<!--                            <li><a href="#">Child</a></li>-->
<!--                            <li><a href="#">Charity</a></li>-->
<!--                            <li><a href="#">Sponsorship</a></li>-->
<!--                            <li><a href="#">Volunteers</a></li>-->
<!--                            <li><a href="#">Feed</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                    <div class="single-sidebar-widget popular-post">-->
<!--                        <h3 class="title">Popular Posts</h3>-->
<!--                        <ul>-->
<!--                            <li>-->
<!--                                <div class="img-box">-->
<!--                                    <div class="inner-box">-->
<!--                                        <img src="img/blog-page/s1.jpg" alt="">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="content-box">-->
<!--                                    <a href="#"><h4>Lorem Ipsum is simply dumm textand somthing more here</h4></a>-->
<!--                                    <span>17 jun, 2015</span>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <div class="img-box">-->
<!--                                    <div class="inner-box">-->
<!--                                        <img src="img/blog-page/s2.jpg" alt="">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="content-box">-->
<!--                                    <a href="#"><h4>Lorem Ipsum is simply dumm textand somthing more here</h4></a>-->
<!--                                    <span>17 jun, 2015</span>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <div class="img-box">-->
<!--                                    <div class="inner-box">-->
<!--                                        <img src="img/blog-page/s3.jpg" alt="">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="content-box">-->
<!--                                    <a href="#"><h4>Lorem Ipsum is simply dumm textand somthing more here</h4></a>-->
<!--                                    <span>17 jun, 2015</span>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <div class="img-box">-->
<!--                                    <div class="inner-box">-->
<!--                                        <img src="img/blog-page/s4.jpg" alt="">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="content-box">-->
<!--                                    <a href="#"><h4>Lorem Ipsum is simply dumm textand somthing more here</h4></a>-->
<!--                                    <span>17 jun, 2015</span>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                    <div class="single-sidebar-widget archive">-->
<!--                        <h3 class="title">Archive</h3>-->
<!--                        <ul>-->
<!--                            <li><a href="#">October 2015</a></li>-->
<!--                            <li><a href="#">November 2015</a></li>-->
<!--                            <li><a href="#">December 2015</a></li>-->
<!--                            <li><a href="#">January 2016</a></li>-->
<!--                            <li><a href="#">February 2016</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                    <div class="single-sidebar-widget tags">-->
<!--                        <h3 class="title">Keywords</h3>-->
<!--                        <ul>-->
<!--                            <li><a href="#">Child</a></li>-->
<!--                            <li><a href="#">Charity</a></li>-->
<!--                            <li><a href="#">Sponsorship</a></li>-->
<!--                            <li><a href="#">Volunteers</a></li>-->
<!--                            <li><a href="#">Feed</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
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
<!--                <h2>Des statistiques qui parles <b></h2>-->
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