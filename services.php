<?php
require('model/config/database.php'); // Inclure la connexion
require('model/config/util.php'); // Fichier qui gère les sessions
init_session();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Destination</title>
    <?php include 'include/common/head.php'; ?>
</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader">
            <div class="custom-loader"></div>
        </div> -->

        <!-- Navbar -->
        <?php include 'include/common/navbar0.php'; ?>
        <!-- Navbar -->

        <!--Form Back Drop-->
        <div class="form-back-drop"></div>


        <!-- Destinations Area start -->
        <section class="tour-grid-page py-100 rel z-2">
            <div class="container">
                <div class="text-center">
                    <h4>Nos services</h4>
                </div>
                <section class="about-us-area pt-70 pb-100 rel z-1" id="visa">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                                <div class="about-us-page">
                                    <img src="assets/images/destinations/R.jpg" alt="About">
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6">
                                <div class="about-us-content rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                                    <div class="section-title mb-25">
                                        <h2>Assistance Visa.</h2>
                                    </div>
                                    <p>
                                        C'est un document officiel qui vous permet de voyager et de séjourner légalement
                                        dans un pays étranger pour une durée déterminée. Essentiel pour les voyages
                                        touristiques, professionnels ou d'études, il varie selon les exigences de chaque
                                        destination.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="about-us-area pt-70 pb-100 rel z-1" id="hotel">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-5 col-lg-6">
                                <div class="about-us-content rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                                    <div class="section-title mb-25">
                                        <h2>Hôtels</h2>
                                    </div>
                                    <p>
                                        Ils vous offrent un confort et services adaptés à tous les voyageurs, que ce soit
                                        pour un séjour touristique, un voyage d'affaires ou une escapade détente. Du luxe
                                        aux options économiques, chaque établissement propose une expériene unique pour vous
                                        rendre votre séjour agréable et mémorables.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                                <div class="about-us-page">
                                    <img src="assets/images/destinations/OIP0.jpg" alt="About">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="about-us-area pt-70 pb-100 rel z-1" id="destination">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                                <div class="about-us-page">
                                    <img src="assets/images/destinations/OIP1.jpg" alt="About">
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6">
                                <div class="about-us-content rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                                    <div class="section-title mb-25">
                                        <h2>Destination</h2>
                                    </div>
                                    <p>
                                        Découvrez une destination unique où paysages époustouflants, culture fascinante et
                                        expériences inoubliables vous attendent. Entre nature préservée, monuments
                                        emblématiques et traditions locales, chaque voyage est une invitation à
                                        l’émerveillement.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="about-us-area pt-70 pb-100 rel z-1" id="tourisme">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-5 col-lg-6">
                                <div class="about-us-content rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                                    <div class="section-title mb-25">
                                        <h2>Tourisme</h2>
                                    </div>
                                    <p>
                                        Le tourisme est bien plus qu’un simple voyage, c’est une porte ouverte sur le monde
                                        et ses richesses. Il permet de découvrir de nouvelles cultures, d’explorer des
                                        paysages variés et de vivre des expériences uniques. Que ce soit pour un séjour
                                        détente sur des plages paradisiaques, une immersion dans l’histoire à travers des
                                        monuments emblématiques ou une aventure au cœur de la nature, chaque destination
                                        offre une opportunité d’apprentissage et d’émerveillement.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                                <div class="about-us-page">
                                    <img src="assets/images/destinations/R00.jpg" alt="About">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <!-- Destinations Area end -->


        <!-- Footer -->
        <?php include 'include/common/footer.php'; ?>
        <!-- Footer -->

    </div>
    <!--End pagewrapper-->


    <!-- Script -->
    <?php include 'include/common/script.php'; ?>

</body>

</html>