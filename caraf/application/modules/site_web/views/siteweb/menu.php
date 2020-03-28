<?php
/**
 * Created by PhpStorm.
 * User: SWEET MANAGER
 * Date: 27/02/2019
 * Time: 17:01
 ?>*/
 ?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.2"></script>
<header class="header">
    <div class="container">
        <div class="logo pull-left">
            <a href="./">
                <img src="<?php bs() ?>public/siteweb/img/resources/logo_caraf.png" class="img-responsive" width="150" alt="Awesome Image"/>
            </a>
        </div>
        <div class="header-right-info pull-right clearfix">
            <div class="single-header-info">
                <!-- <div class="icon-box">
                    <div class="inner-box">
                        <i class="flaticon-interface-2"></i>
                    </div>
                </div> -->
                <!-- <div class="content">
                    <h3>EMAIL</h3>
                    <p>companyname@mail.com</p>
                </div> -->
            </div>
            <div class="single-header-info">
                <div class="icon-box">
                    <div class="inner-box">
                        <i class="flaticon-telephone"></i>
                    </div>
                </div>
                <div class="content">
                    <h3>Appelez nous</h3>
                    <p><b>(+33) 6 52 29 07 71</b></p>
                </div>
            </div>
            <div class="single-header-info">
                <!-- Modal: Je participe Starts -->
                <a class="thm-btn" data-toggle="modal" href="<?php echo base_url()?>site_web/contact">Faire un don</a>

                <!-- Modal: Je participe Ends -->
            </div>
        </div>
    </div>
</header>
<nav class="mainmenu-area stricky">
    <div class="container">
        <div class="navigation pull-left">
            <div class="nav-header">
                <ul>
                    <li class="dropdown">
                        <a href="<?php echo base_url()?>">Accueil</a>
                        <!-- <ul class="submenu">
                            <li><a href="index-1.html">Home One</a></li>
                            <li><a href="index-2.html">Home Two</a></li>
                            <li><a href="index-3.html">Home Three</a></li>
                            <li><a href="index-4.html">Home Four</a></li>
                        </ul> -->
                    </li>
                    <li><a href="<?php echo base_url()?>site_web/about">la Caraf</a></li>
                    <li><a href="<?php echo base_url()?>site_web/lepays"">Le pays Akyé</a></li>
                    <li class="dropdown">
                        <a href="#">Projets & Activités</a></a>
                        <ul class="submenu">
                            <li><a href="<?php echo base_url()?>site_web/projetdurable">Projet durables</a></li>
                            <li><a href="<?php echo base_url()?>site_web/petitprojets">Petits Projet</a></li>
                            <!-- <li><a href="#">Single Cause</a></li> -->
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Events & Actualités</a>
                        <ul class="submenu">
                            <li><a href="<?php echo base_url()?>site_web/msante">Santé</a></li>
                            <li><a href="<?php echo base_url()?>site_web/urbani">Urbanisation</a></li>
                            <li><a href="<?php echo base_url()?>site_web/necrolo">Nécrologie</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url()?>site_web/yafeca">YAFECA</a></li>
                    <li><a href="<?php echo base_url()?>site_web/contact">Contact</a></li>

                </ul>
            </div>
            <div class="nav-footer">
                <button><i class="fa fa-bars"></i></button>
            </div>
        </div>
        <div class="navigation pull-right">
            <div class="nav-header">
                <ul>

                    <li class="pull-right"><a href="<?php bs() ?>users/auth/login"></a></li>

   
                                    <?php                     

                                    $sess_id = $this->session->userdata('user_id');

                                    if(!empty($sess_id))
                                    {?>
                                    <li class="dropdown">
                                                            <a href="#">Mon Espace Caraf</a>
                                                            <ul class="submenu">
                                                                <li><a href="<?php bs() ?>users/auth/login">Mes cotisation</a>
                                                                <ul class="submenu">
                                                                <li><a  href="<?= base_url('Stripe_web/liste_user_cot') ?>">Cotisations Payées</a></li>
                                                                <li><a  href="<?= base_url('Stripe_web') ?>">Payer mes cotisations</a></li>
                                                                <li><a  href="#"> Cotisations En attentes</a></li>
                                                                <li><a  href="#">Toutes mes cotisations</a></li>
                                                            </ul></li>
                                                                <li><a href="<?= base_url('Site_web/monagenda') ?>">Mon Agenda</a></li>
                                                                <li><a href="#">Mon Compte</a></li>
                                                                <li><a href="<?php bs() ?>users/Auth/logout"><i class="fa fa-key"></i> Déconnexion</a></li>
                                                            </ul>
                                                            </li>
                                            <?php

                                    }else{

                                           // $this->session->set_userdata(array('msg'=>'')); 
                                            //load the login page ?>
                                           
                                        <li class="dropdown">
                                            <a href="#">Espace membre</a>
                                            <ul class="submenu">
                                                <li><a href="<?php bs() ?>users/auth/login">Se Connecter</a></li>
                                                <li><a href="<?php bs() ?>users/Register">S'inscrire</a></li>
                                            </ul> </li>      
                                  <?php  } ?>
                        
                </ul>
            </div>
        </div>
    </div>
</nav>
