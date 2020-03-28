
<?php

function coupeCourt($texte,$long,$marge=10,$id)
{$msg = stripslashes($texte);
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
            $message .= '<p><a class="btn-details" href="'.base_url().'Site_web/details_article/'.$id.'"><button class="thm-btn inverse btn-xs pull-right">Détails</button></a></p>';
        }
    } else {
        $message = $msg;
    }
    echo  $message;
}?>

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
                <h2>CARAF NECROLOGIE</h2>
                <ul class="breadcumb">
                    <li><a href="<?php echo base_url()?>">Accueil</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li><span>CARAF ->>NECROLOGIE</span></li>
                </ul>
                <span class="decor"><span class="inner"></span></span>
            </div>
        </div>
    </div>
</section>


<section class="blog-home sec-padding blog-page">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-12 pull-left pull-sm-none">
                <div class="row">
                    <?php foreach  ($all_article_necro as $necrolo): ?>
                    <div class="col-sm-6">
                        <div class="single-blog-post">
                            <div class="img-box">
                                <img class="full-width" src="<?php bs() ?>uploads/<?php echo $necrolo->image ?>" alt="">
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <ul>
                                                <li><a href="<?php echo base_url()?>Site_web/details_article/<?= $necrolo->id ?>"><i class="fa fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-box">
                                <div class="date-box">
                                    <!--<div class="inner">
                                        <div class="date">-->
<!--                                            <b>24</b>-->
<!--                                            apr-->
<!--                                        </div>-->
                                    <!--  <div class="comment">
<!--                                            <i class="flaticon-interface-1"></i> 8-->
                                    <!-- </div>
                                 </div>-->
                                </div>
                                <div class="content">
                                    <h3 class="event-title "><a href="<?php echo base_url()?>Site_web/details_article/<?= $necrolo->id ?>"><?php echo $necrolo->title ?></a></h3>
                                    <?php coupeCourt($necrolo->content,150,$marge=10,$necrolo->id);?>
<!--                                    <span>Tag: <a href="blog-details.html">child, charity</a></span>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>

                <!--Pagination-->
<!--                <div class="pager-outer clearfix mb_0">-->
<!--                    <ul class="pagination mb_0">-->
<!--                        <li><a href="#">Prev</a></li>-->
<!--                        <li><a href="#">1</a></li>-->
<!--                        <li class="active"><a href="#">2</a></li>-->
<!--                        <li><a href="#">3</a></li>-->
<!--                        <li><a href="#">-</a></li>-->
<!--                        <li><a href="#">4</a></li>-->
<!--                        <li><a href="#">5</a></li>-->
<!--                        <li><a href="#">Next</a></li>-->
<!--                    </ul>-->
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
<!---->
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


<?php include_once("footer.php") ;?>