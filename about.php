<?php
require('model/config/database.php'); // Inclure la connexion
require('model/config/util.php'); // Fichier qui gère les sessions
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>A propos</title>
    <?php include 'include/common/head.php'; ?>

</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader">
            <div class="custom-loader"></div>
        </div>

        <?php include 'include/common/navbar0.php'; ?>



        <!--Form Back Drop-->
        <div class="form-back-drop"></div>

        <!-- Page Banner Start -->




        <!-- About Area start -->
        <section class="about-area-two py-100 rel z-1">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-3" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <span class="subtitle mb-35">À propos de l'entreprise</span>
                    </div>
                    <div class="col-xl-9">
                        <div class="about-page-content" data-aos="fade-left" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="row">
                                <div class="col-lg-8 pe-lg-5 me-lg-5">
                                    <div class="section-title mb-25">
                                        <h2>A-S FINANCIAL</h2>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <p>A-S Financial est une agence de voyage qui aide ses clients à planifier des
                                        voyages en toute sérénité.</p>
                                    <ul class="list-style-two mt-35">
                                        <li>Agence d'expérience</li>
                                        <li>Équipe profesionnelle</li>
                                        <li>Ouvert Lundi à Vendredi</li>
                                        <li>De 08h à 17h</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area end -->


        <!-- Features Area start -->
        <section class="about-features-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="about-feature-image" data-aos="fade-up" data-aos-duration="1500"
                            data-aos-offset="50">
                            <img src="assets/images/about/about1.jpg" alt="About">
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="about-feature-image" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500"
                            data-aos-offset="50">
                            <img src="assets/images/about/about04.jpg" alt="About">
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-8">
                        <div class="about-feature-boxes" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="1500" data-aos-offset="50">
                            <img src="assets/images/about/about03.jpg" alt="About">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Features Area end -->


        <!-- About Us Area start -->
        <section class="about-us-area pt-70 pb-100 rel z-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="about-us-content rmb-55" data-aos="fade-left" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="section-title mb-25">
                                <h2>Voyagez en toute confiance.</h2>
                            </div>
                            <p>Notre mission est de rendre le voyage accessible et enrichissant pour tous. Grâce à une équipe passionnée et des services personnalisés, nous accompagnons nos clients à chaque étape pour transformer leurs rêves d’évasion en réalité.</p>
                            <div class="row pt-25">
                                <div class="col-6">
                                    <div class="counter-item counter-text-wrap">

                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="counter-item counter-text-wrap">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="about-us-page">
                            <img src="assets/images/about/about02.jpg" alt="About">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Area end -->


        <!-- Client Logo Area start -->
        <div class="client-logo-area mb-100">
            <div class="container">
                <div class="client-logo-wrap pt-60 pb-55">
                    <div class="text-center mb-40" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <h6>Nos partenaires</h6>
                    </div>
                    <div class="client-logo-active">
                        <div class="client-logo-item" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                            <a href="#"><img src="assets/images/client-logos/t00.jpeg" alt="Client Logo"></a>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="50" data-aos-duration="1500"
                            data-aos-offset="50">
                            <a href="#"><img src="assets/images/client-logos/hh.jpeg" alt="Client Logo"></a>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="100" data-aos-duration="1500"
                            data-aos-offset="50">
                            <a href="#"><img src="assets/images/client-logos/ph00.jpeg" alt="Client Logo"></a>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="150" data-aos-duration="1500"
                            data-aos-offset="50">
                            <a href="#"><img src="assets/images/client-logos/ig9.jpeg" alt="Client Logo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Client Logo Area end -->


        <!-- Footer -->
        <?php include 'include/common/footer.php'; ?>
        <!-- Footer -->

    </div>
    <!--End pagewrapper-->


    <!-- Script -->
    <?php include 'include/common/script.php'; ?>
</body>

</html>