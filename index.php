<?php
require('model/config/database.php'); // Inclure la connexion
require('model/config/util.php'); // Fichier qui gère les sessions

function countData($table): int
{
    global $bdd;

    $sql = $bdd->query("SELECT COUNT(*) as total FROM $table");
    $sql->execute();
    return $sql->fetch()['total'];
}
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
                                <h2>Voyagez, c'est vivre.</h2>
                            </div>
                            <p>Nous voyageons pour chercher d'autres états, d'autres vie, d'autres ames.</p>
                            <div class="divider counter-text-wrap mt-45 mb-55"><span>Nous avons <span><span
                                            class="count-text plus" data-speed="3000" data-stop="5">0</span>
                                        ans</span>
                                    d'expérience</span></div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="counter-item counter-text-wrap">
                                        <span class="count-text" data-speed="3000"
                                            data-stop="<?= countData('destination') ?>">0</span>
                                        <span class="counter-title">Destinations Populaires</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="counter-item counter-text-wrap">
                                        <span class="count-text" data-speed="3000"
                                            data-stop="<?= countData('hotel') ?>">0</span>
                                        <span class="counter-title">Hôtels</span>
                                    </div>
                                </div>
                            </div>
                            <a href="destination.php" class="theme-btn mt-10 style-two">
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
                                <img src="assets/images/destinations/R.jpg" alt="Tour List">
                            </div>
                            <div class="content">
                                <h5>
                                    <a href="services.php#visa">VISA</a>
                                </h5>
                                <p> C'est un document officiel qui vous permet de ...
                                </p>
                                <div class="destination-footer">
                                    <a href="services.php#visa" class="theme-btn style-two style-three">
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
                                <img src="assets/images/destinations/OIP0.jpg" alt="Tour List">
                            </div>
                            <div class="content">
                                <h5>
                                    <a href="services.php#hotel">Hôtels</a>
                                </h5>
                                <p> Ils vous offrent un confort et services adaptés à tous ...
                                </p>
                                <div class="destination-footer">
                                    <a href="services.php#hotel" class="theme-btn style-two style-three">
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
                                <img src="assets/images/destinations/OIP1.jpg" alt="Tour List">
                            </div>
                            <div class="content">
                                <h5>
                                    <a href="services.php#destination">Destination</a>
                                </h5>
                                <p>Découvrez une destination unique où paysages époustouflants...
                                </p>
                                <div class="destination-footer">
                                    <a href="services.php#destination" class="theme-btn style-two style-three">
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
                                <img src="assets/images/destinations/R00.jpg" alt="Tour List">
                            </div>
                            <div class="content">
                                <h5>
                                    <a href="services.php#tourisme">Tourisme</a>
                                </h5>
                                <p>Le tourisme est bien plus qu’un simple voyage ...
                                </p>
                                <div class="destination-footer">
                                    <a href="services.php#tourisme" class="theme-btn style-two style-three">
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