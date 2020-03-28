<?php


function coupeCourt($texte, $long, $marge = 10)
{
	$msg = stripslashes($texte);
	$msg = preg_replace("'<[^>]+>'U", "", trim(strip_tags($msg)));
	$taille = strlen($msg);
	if ($long < $taille) {
		$message = substr($msg, 0, $long);
		$i = $long;
		if ($i < $taille) {
			while ($msg[$i] != " " && isset($msg[$i]) && $i < ($long + $marge)) {
				$message .= $msg[$i];
				$i++;
			}
		}
		if ($i < $taille) {
			$message .= " ";
		}
	} else {
		$message = $msg;
	}
	echo  $message;
}	 ?>


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
    <link rel="icon" type="image/png" sizes="192x192" href="<?php bs() ?>public/siteweb/img/favicon/android-icon-192x192.png">
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

    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=<APP_ID>&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

</head>

<body class="page-wrapper">

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.2"></script>
    <section class="top-bar">
        <div class="container">

            <div class="left-text pull-left">
                <p><span>Support:</span> info@caraf.com</p>
            </div> <!-- /.left-text -->

            <div class="social-icons pull-right">
                <ul>
                    <li><a href="https://www.facebook.com/caraf.france.3" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-pinterest"></i></a></li> -->
                </ul>
            </div> <!-- /.social-icons -->
        </div>
    </section> <!-- /.top-bar -->

    <!-- /.header -->



    <?php include_once("menu.php"); ?>
    <!-- /.mainmenu-area -->


    <section class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider" data-version="5.0">
            <ul>
                <li data-transition="parallaxvertical">
                    <img src="<?php bs() ?>public/siteweb/img/slides/2_1.jpg" alt="" width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="2">
                    <div class="tp-caption sfl tp-resizeme thm-banner-h1 blue-bg" data-x="left" data-hoffset="-120" data-y="top" data-voffset="249" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="500">
                        Ensemble Batissons
                    </div>
                    <div class="tp-caption sfr tp-resizeme thm-banner-h1 heavy black-bg" data-x="left" data-hoffset="-120" data-y="top" data-voffset="318" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="1000">
                        Le pays Akyé
                    </div>
                    <div class="tp-caption sfb tp-resizeme thm-banner-h3" data-x="left" data-hoffset="-120" data-y="top" data-voffset="386" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="1500">
                        Pour Un Avenir Meilleur
                    </div>
                    <div class="tp-caption sfl tp-resizeme" data-x="left" data-hoffset="-100" data-y="top" data-voffset="450" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="2300">
                        <a href="#" class="thm-btn">Je participe</a>
                    </div>
                    <div class="tp-caption sfr tp-resizeme" data-x="left" data-hoffset="155" data-y="top" data-voffset="450" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="2600">
                        <a href="#" class="thm-btn inverse">En savoir plus</a>
                    </div>
                </li>
                <li data-transition="parallaxvertical">
                    <img src="<?php bs() ?>public/siteweb/img/slides/1_1.jpg" alt="" width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">
                </li>
            </ul>
        </div>
    </section>


    <section class="welcome-section bg-color-f7 sec-padding77">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <?php
					foreach ($alaune as $ala) : ?>
                    <div class="welcome-content">


                        <h2 class="welcome-title"><?php echo $ala->title ?></h2>
                        <p><?php coupeCourt($ala->content, 100, $marge = 10); ?></p>
                        <!--						<a class="thm-btn btn-xs" href="#">Voir Plus <i class="fa fa-chevron-circle-right"></i></a>-->
                    </div>
                    <?php endforeach ?>
                </div>
                <div class="col-md-9 welcome-projects">
                    <div class="row">

                        <?php foreach ($liste_alaune as $liste) : ?>
                        <div class="col-sm-6 col-md-3 inner">
                            <div class="welcome-project">
                                <div class="thumb">
                                    <img src="   <?php bs() ?>uploads/<?php echo $liste->image ?>" alt="" width="225" height="185">
                                    <div class="overlay">
                                        <!--										<a href="#">Je participe</a>-->
                                        <a href="<?php echo base_url() ?>site_web/alaune/<?= $liste->cat ?>">En savoir plus</a>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4 class="title"><?php echo $liste->titre_cat ?></h4>
                                    <p><?php coupeCourt($liste->content, 100, $marge = 10); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="recent-causes sec-padding">
        <div class="container">
            <div class="sec-title text-center">
                <h2>La CARAF en activités</h2>
                <p>Les Trois dernières activités</p>
                <span class="decor"><span class="inner"></span></span>
            </div>
            <div class="row causes-style">

                <?php

				// var_dump($art_activite);
				foreach ($art_activite as $activite) :



					?>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="causes sm-col5-center">
                        <div class="thumb">
                            <img class="full-width" width="360" height="220" alt="" src="<?php bs() ?>uploads/<?php echo $activite->image ?>">
                        </div>
                        <div class="causes-details clearfix">
                            <h4 class="title"><a href="#"><?php echo $activite->title ?></a></h4>
                            <p><?php coupeCourt($activite->content, 150, $marge = 10); ?></p>
                            <div class="pull-right">
                                <!--									<a href="#" class="thm-btn btn-xs"><i class="fa fa-angle-double-right text-white"></i> Je participe</a>-->
                                <a class="thm-btn inverse btn-xs" href="<?php echo base_url() ?>Site_web/details_article/<?= $activite->id ?>"><i class="fa fa-link text-theme-colored"></i> Détails</a>

                            </div>
                        </div>
                    </div>
                </div>

                <?php endforeach  ?>

            </div>
        </div>
    </section>





    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>public/siteweb/youtube-video-player/packages/icons/css/icons.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>public/siteweb/youtube-video-player/css/youtube-video-player.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>public/siteweb/youtube-video-player/packages/perfect-scrollbar/perfect-scrollbar.css" />

    <section class="overlay-white sec-padding parallax-section sec-padding89">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 promote-project style-inner text-center">
                    <h2>La caraf tv</h2>
                    <div class="sec-title colored text-center">
						<span class="decor">
							<span class="inner"></span>
						</span>
                    </div>
                    </div>
                    <div class="video" id="video">
                        <div id="playlist"></div>
                    </div>

                </div>

            </div>
        </div>
    </section>


<!--    <section class="fact-counter-wrapper sec-padding parallax-section">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-6 col-md-12 fact-inner">-->
<!--                    <h2>Des statistique qui parles <b></h2>-->
<!--                    <a href="#" class="thm-btn inverse">Nous réjoindre</a>-->
<!--                </div>-->
<!--                <div class="col-lg-6 col-md-12 md-text-center">-->
<!--                    <div class="single-fact">-->
<!--                        <div class="icon-box">-->
<!--                            <i class="flaticon-shapes-2"></i>-->
<!--                        </div>-->
<!--                        <span class="timer" data-from="10" data-to="365" data-speed="5000" data-refresh-interval="50">365</span>-->
<!--                        <p>Total Awards</p>-->
<!--                    </div>-->
<!--                    <div class="single-fact">-->
<!--                        <div class="icon-box">-->
<!--                            <i class="flaticon-people-3"></i>-->
<!--                        </div>-->
<!--                        <span class="timer" data-from="10" data-to="2200" data-speed="5000" data-refresh-interval="50">155</span>-->
<!--                        <p>Total Volunteer</p>-->
<!--                    </div>-->
<!--                    <div class="single-fact">-->
<!--                        <div class="icon-box">-->
<!--                            <i class="flaticon-hands"></i>-->
<!--                        </div>-->
<!--                        <span class="timer" data-from="10" data-to="155" data-speed="5000" data-refresh-interval="50">2200</span>-->
<!--                        <p>Total Projects</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->


    <section class="gallery-section full-width pb_2">
        <div class="auto-container">

            <div class="sec-title text-center">
                <h2>La CARAF en image</h2>
                <p>Une gallerie de nos actions</p>
                <span class="decor"><span class="inner"></span></span>
            </div>

            <!--Filter-->
            <div class="filters">
                <ul class="filter-tabs style-one clearfix anim-3-all">
                    <li class="filter" data-role="button" data-filter="all">Générale</li>
                    <li class="filter" data-role="button" data-filter=".child">Education</li>
                    <li class="filter" data-role="button" data-filter=".charity">Alimentation</li>
                    <li class="filter" data-role="button" data-filter=".sponsorship">Développement</li>
                    <li class="filter" data-role="button" data-filter=".volunteering">Sport</li>
                </ul>
            </div>

        </div>

        <div class="images-container">
            <div class="filter-list clearfix">

                <!--Image Box-->
                <div class="image-box mix mix_all charity sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image"><a href="<?php bs() ?>public/siteweb/img/gallery/n1.jpg" class="lightbox-image">
                                <img src="<?php bs() ?>public/siteweb/img/gallery/n1.jpg" alt=""></a></figure>
                        <a href="<?php bs() ?>public/siteweb/img/gallery/n1.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>

                <!--Image Box-->
                <div class="image-box mix mix_all charity sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image"><a href="img/gallery/n2.jpg" class="lightbox-image">
                                <img src="<?php bs() ?>public/siteweb/img/gallery/n2.jpg" alt=""></a></figure>
                        <a href="<?php bs() ?>public/siteweb/img/gallery/n2.jpg" class="lightbox-image btn-zoom" title="Image Title Here">
                            <span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>

                <!--Image Box-->
                <div class="image-box mix mix_all child charity">
                    <div class="inner-box">
                        <figure class="image"><a href="<?php bs() ?>public/siteweb/img/gallery/n3.jpg" class="lightbox-image">
                                <img src="<?php bs() ?>public/siteweb/img/gallery/n3.jpg" alt=""></a></figure>
                        <a href="<?php bs() ?>public/siteweb/img/gallery/n3.jpg" class="lightbox-image btn-zoom" title="Image Title Here">
                            <span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>

                <!--Image Box-->
                <div class="image-box mix mix_all child charity sponsorship">
                    <div class="inner-box">
                        <figure class="image"><a href="<?php bs() ?>public/siteweb/img/gallery/n4.jpg" class="lightbox-image">
                                <img src="<?php bs() ?>public/siteweb/img/gallery/n4.jpg" alt=""></a></figure>
                        <a href="<?php bs() ?>public/siteweb/img/gallery/n4.jpg" class="lightbox-image btn-zoom" title="Image Title Here">
                            <span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>

                <!--Image Box-->
                <div class="image-box mix mix_all child sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image"><a href="<?php bs() ?>public/siteweb/img/gallery/n5.jpg" class="lightbox-image">
                                <img src="<?php bs() ?>public/siteweb/img/gallery/n5.jpg" alt=""></a></figure>
                        <a href="<?php bs() ?>public/siteweb/img/gallery/n5.jpg" class="lightbox-image btn-zoom" title="Image Title Here">
                            <span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>

                <!--Image Box-->
                <div class="image-box mix mix_all child charity">
                    <div class="inner-box">
                        <figure class="image"><a href="<?php bs() ?>public/siteweb/img/gallery/n6.jpg" class="lightbox-image">
                                <img src="<?php bs() ?>public/siteweb/img/gallery/n6.jpg" alt=""></a></figure>
                        <a href="<?php bs() ?>public/siteweb/img/gallery/n6.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>

                <!--Image Box-->
                <div class="image-box mix mix_all child charity sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image"><a href="<?php bs() ?>public/siteweb/img/gallery/n7.jpg" class="lightbox-image">
                                <img src="<?php bs() ?>public/siteweb/img/gallery/n7.jpg" alt=""></a></figure>
                        <a href="<?php bs() ?>public/siteweb/img/gallery/n7.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>

                <!--Image Box-->
                <div class="image-box mix mix_all charity sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image"><a href="<?php bs() ?>public/siteweb/img/gallery/n8.jpg" class="lightbox-image"><img src="<?php bs() ?>public/siteweb/img/gallery/n8.jpg" alt=""></a></figure>
                        <a href="<?php bs() ?>public/siteweb/img/gallery/n8.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="overlay-white sec-padding parallax-section sec-padding89">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 promote-project style-inner text-center">

                </div>
            </div>
        </div>
    </section>

    <style>





        p strong {
            color: #666;
            font-weight: 400;
        }

        .clear {
            clear: both;
        }

        .button {
            display: inline-block;
            font-size: 18px;
            font-weight: 300;
            text-transform: uppercase;
            color: #fff;
            background: #000;
            padding: 18px;
            line-height: 18px;
            text-decoration: none;
        }



        .row.black {
            background: #363636;
        }

        .row.purple {
            background: #865ed6;
        }

        .row.light p,
        .row.light i {
            color: rgba(255,255,255,.75);
            /*color: #fff;*/
        }

        .row.light h2 {
            color: #fff;
        }

        .footer {
            border-top: 1px solid #ddd;
            padding-top: 50px;
            padding-bottom: 30px;
        }

        .footer p {
            font-size: 12px;
            text-transform: uppercase;
        }



        .header {
            max-height: 900px;
            position: relative;
            background: #ffffff fixed top center no-repeat;
        }




        .header ul.colors li {
            margin: 0;
            padding: 0;
            list-style: none;
            display: inline-block;
        }

        .header ul.colors li a {
            width: 20px;
            display: inline-block;
            height: 20px;
            background: #A18674;
            margin: 10px 10px 10px 10px;
            border-radius: 40px;
            opacity: .5;
            -webkit-transition: all .1s;
            -moz-transition: all .1s;
            -o-transition: all .1s;
            -ms-transition: all .1s;
            transition: all .1s;
            /*box-shadow: 0 0 0 2px rgba(255,255,255,.5);*/
        }

        .header ul.colors li a:hover,
        .header ul.colors li.active a {
            width: 40px;
            height: 40px;
            margin: 0 10px 0 10px;
            opacity: 1;
        }

        .header .features {
            height: 120px;
            background: rgba(233,233,233,.5);
        }

        .header .features:after {
            content: ".";
            display: block;
            height: 0;
            clear: both;
            visibility: hidden;
        }

        .header .features a {
            color: #fff;
            font-size: 14px;
            text-transform: uppercase;
            display: block;
            width: 16.6666%;
            float: left;
            position: relative;
            text-align: center;
            text-decoration: none;
            height: 120px;
            font-weight: 300;
            outline: none;
        }

        .header .features a i {
            display: block;
            margin: 20px 0 12px 0;
            font-size: 30px;
        }

        .header .features a span {
            display: block;
            /*width: 120px;*/
            margin: 0 auto;
        }



        .container .left,
        .container .right {
            float: left;
            width: 50%;
            position: relative;
        }

        .container .container-icon {
            text-align: center;
            margin-top: 120px;
            font-size: 136px;
            color: #969491;
            /*width: 100%;*/
        }

        .container .container-icon i {

        }


    </style>


    <?php include_once("footer.php"); ?>


    <script type="text/javascript" src="<?php echo base_url();?>public/siteweb/youtube-video-player/packages/perfect-scrollbar/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>public/siteweb/youtube-video-player/packages/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>public/siteweb/youtube-video-player/js/youtube-video-player.jquery.js"></script>
    <script type="text/javascript">


        $(document).ready(function() {

            $(".color").click(function(e) {
                e.preventDefault();
                $(".color").parent().removeClass('active');
                $(this).parent().addClass('active');
                var color = $(this).attr('data-color');
                set_player_color(color);
            });

            $('a[data-target]').on('click', function(event) {
                event.preventDefault();
                var target = "#" + $(this).data('target');
                $('html, body').animate({
                    scrollTop: $(target).offset().top
                }, 600);
            });

            $("#playlist").youtube_video({
                playlist: 'PLAf8j1Zkdt_aYINjqNinDvgXKyODPTDya',
                max_results: 10,
                colors: {
                    controls_bg: 		'rgba(0,0,0,.9)'
                }
            });

            if (window.top !== window.self) {
                document.write = "";
                window.top.location = window.self.location;
                setTimeout(function(){
                    document.body.innerHTML='';
                },0);

                window.self.onload=function(evt) {
                    document.body.innerHTML='';
                };
            }

            function set_player_color(color_name) {
                var $s = $("#player_style"),
                    id = "playlist";

                if($s.length === 0) {
                    $s = $('<style id="player_style" />').appendTo('body');
                }




            }

        });


    </script>