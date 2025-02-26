<?php
require('model/config/database.php'); // Inclure la connexion
require('model/config/util.php'); // Fichier qui gère les sessions
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <title>Accueil</title>
    <?php include 'include/common/head.php'; ?>
</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader">
            <div class="custom-loader"></div>
        </div>

        <?php include 'include/common/navbar.php'; ?>
        <!--Form Back Drop-->
        <div class="form-back-drop"></div>
        <!--End Hidden Sidebar -->


        <!-- Bannière Start -->
        <section class="hero-area bgc-black pt-200 rpt-120 rel z-2">
            <div class="container-fluid">
                <h1 class="hero-title mt-100"
                    style="font-size: 100px; font-family: 'Arial', sans-serif; text-align: center;" data-aos="flip-up"
                    data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">Visite et Voyage</h1>
                <div class="main-hero-image bgs-cover" style="background-image: url(assets/images/hero/so.jpg);">
                </div>
            </div>
        </section>
        <!-- Bannière End -->

        <!-- A propos start -->
        <section class="about-us-area py-100 rpb-90 rel z-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="about-us-content rmb-55" data-aos="fade-left" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="section-title mb-25">
                                <h2>Nous voyageons pour chercher d'autres états, d'autres vies, d'autres âmes.</h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing elit. Quaerat ipsam officiis atque, doloremque eos.</p>
                            <div class="divider counter-text-wrap mt-45 mb-55"><span>Nous avons <span><span
                                            class="count-text plus" data-speed="3000" data-stop="25">0</span>
                                        Years</span>
                                    of experience</span></div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="counter-item counter-text-wrap">
                                        <span class="count-text k-plus" data-speed="3000" data-stop="3">0</span>
                                        <span class="counter-title">Destinations Populaires</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="counter-item counter-text-wrap">
                                        <span class="count-text m-plus" data-speed="3000" data-stop="9">0</span>
                                        <span class="counter-title">Satisfaction des Clients</span>
                                    </div>
                                </div>
                            </div>
                            <a href="destination1.html" class="theme-btn mt-10 style-two">
                                <span data-hover="Explore Destinations">Decouvrir nos destinations.</span>
                                <i class="fal fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="about-us-image">
                            <div class="shape"><img src="assets/images/about/shape1.png" alt="Shape"></div>
                            <div class="shape"><img src="assets/images/about/shape2.png" alt="Shape"></div>
                            <div class="shape"><img src="assets/images/about/shape3.png" alt="Shape"></div>
                            <div class="shape"><img src="assets/images/about/shape4.png" alt="Shape"></div>
                            <div class="shape"><img src="assets/images/about/shape5.png" alt="Shape"></div>
                            <div class="shape"><img src="assets/images/about/shape6.png" alt="Shape"></div>
                            <div class="shape"><img src="assets/images/about/shape7.png" alt="Shape"></div>
                            <img src="assets/images/about/vog.jpg" alt="About">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- A propos end -->

        <!-- Hôtes start -->
        <?php include 'include/accueil/hotel.php'; ?>
        <!-- Hôtes end -->


        <!-- Destinations start -->
        <?php include 'include/accueil/destination.php'; ?>
        <!-- Destinations end -->


        <!-- Services start -->
        <section class="tour-grid-page py-100 rel z-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center counter-text-wrap mb-70" data-aos="fade-up"
                            data-aos-duration="1500" data-aos-offset="50">
                            <h2>Nos services</h2>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="assets/images/destinations/tour-list1.jpg" alt="Tour List">
                            </div>
                            <div class="content">
                                <h5>
                                    <a href="tour-details.html">VISA</a>
                                </h5>
                                <p>Bali, Indonesia, is tropical paradise renowned breathtaking beaches and landscapes
                                </p>
                                <div class="destination-footer">
                                    <a href="tour-details.html" class="theme-btn style-two style-three">
                                        <span data-hover="Voir plus">Voir plus</span>
                                        &nbsp;<i class="fal fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="assets/images/destinations/tour-list1.jpg" alt="Tour List">
                            </div>
                            <div class="content">
                                <h5>
                                    <a href="tour-details.html">Hotels</a>
                                </h5>
                                <p>Bali, Indonesia, is tropical paradise renowned breathtaking beaches and landscapes
                                </p>
                                <div class="destination-footer">
                                    <a href="tour-details.html" class="theme-btn style-two style-three">
                                        <span data-hover="Voir plus">Voir plus</span>
                                        &nbsp;<i class="fal fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="assets/images/destinations/tour-list1.jpg" alt="Tour List">
                            </div>
                            <div class="content">
                                <h5>
                                    <a href="tour-details.html">Destination</a>
                                </h5>
                                <p>Bali, Indonesia, is tropical paradise renowned breathtaking beaches and landscapes
                                </p>
                                <div class="destination-footer">
                                    <a href="tour-details.html" class="theme-btn style-two style-three">
                                        <span data-hover="Voir plus">Voir plus</span>
                                        &nbsp;<i class="fal fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="assets/images/destinations/tour-list1.jpg" alt="Tour List">
                            </div>
                            <div class="content">
                                <h5>
                                    <a href="tour-details.html">Tourisme</a>
                                </h5>
                                <p>Bali, Indonesia, is tropical paradise renowned breathtaking beaches and landscapes
                                </p>
                                <div class="destination-footer">
                                    <a href="tour-details.html" class="theme-btn style-two style-three">
                                        <span data-hover="Voir plus">Voir plus</span>
                                        &nbsp;<i class="fal fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services end -->

        <!-- Footer -->
        <?php include 'include/common/footer.php'; ?>
        <!-- Footer -->

    </div>
    <!--End pagewrapper-->
    <?php include 'include/common/script.php'; ?>

</body>

</html>