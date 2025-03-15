<?php
require('model/config/database.php'); // Inclure la connexion
require('model/config/util.php'); // Fichier qui gère les sessions
init_session();
if (is_connected()) {
    $user =  $_SESSION["id"];
} else {
    header('Location: login.php');
}
$page = "securite";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Contact</title>
    <?php include 'include/common/head.php'; ?>
</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader">
            <div class="custom-loader"></div>
        </div>

        <!-- Navbar -->
        <?php include 'include/common/navbar0.php'; ?>
        <!-- Navbar -->


        <!--Form Back Drop-->
        <div class="form-back-drop"></div>

        <!-- Tour List Area start -->
        <section class="tour-list-page py-100 rel z-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-10 rmb-75">
                        <div class="shop-sidebar mb-30">
                            <div class="widget widget-activity" data-aos="fade-up" data-aos-duration="1500"
                                data-aos-offset="50">
                                <h6 class="widget-title">Espace client</h6>
                                <ul class="radio-filter">
                                    <li>
                                        <a href="./client-accueil.php"
                                            class="<?= $page == 'profile' ? 'active' : ''; ?>">
                                            <i class="fas fa-user me-2"></i> Profil
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./client-historique.php"
                                            class="<?= $page == 'historique' ? 'active' : ''; ?>">
                                            <i class="fas fa-history me-2"></i> Historique des commandes
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./client-notification.php"
                                            class="<?= $page == 'notifications' ? 'active' : ''; ?>">
                                            <i class="fas fa-bell me-2"></i> Notifications
                                        </a>
                                    </li>
                                    <!-- <li>
                                        <a href="#" class="<?= $page == 'securite' ? 'active' : ''; ?>">
                                            <i class="fas fa-shield-alt me-2"></i> Sécurité
                                        </a>
                                    </li> -->
                                    <li>
                                        <a href="./deconnexion.php">
                                            <i class="fas fa-power-off me-2"></i> Déconnexion
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget widget-cta" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="content text-white">
                                <span class="h6">Envie d'explorer le monde</span>
                                <h3>Visitez nos destinations</h3>
                                <a href="destination.php" class="theme-btn style-two bgc-secondary">
                                    <span data-hover="Visiter maintenant">Visiter maintenant&nbsp;</span>
                                    <i class="fal fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="image">
                                <img src="assets/images/widgets/cta-widget.png" alt="CTA">
                            </div>
                            <div class="cta-shape"><img src="assets/images/widgets/cta-shape2.png" alt="Shape"></div>
                        </div>

                    </div>
                    <div class="col-lg-9">
                        <div class="destination-item style-three bgc-lighter" data-aos="fade-up"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="assets/images/destinations/destination-five1.jpg" alt="Tour List">
                            </div>
                            <div class="content">
                                <h5><a href="tour-details.html">Bay Cruise by Boat in Bali, Indonesia</a></h5>
                                <!-- <p>Bali, Indonesia, is tropical paradise renowned breathtaking beaches, vibrant culture,
                                    and lush landscapes</p> -->
                                <ul class="blog-meta">
                                    <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                    <li><i class="far fa-user"></i> 5-8 guest</li>
                                </ul>
                                <div class="destination-footer">
                                    <a href="tour-details.html" class="theme-btn style-two style-three">
                                        <span data-hover="Payer">Payer</span> &nbsp;
                                        <i class="fal fa-check"></i>
                                    </a>
                                    <a href="tour-details.html" class="theme-btn danger style-two style-three">
                                        <span data-hover="Annuler">Annuler</span> &nbsp;
                                        <i class="fal fa-times"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Tour List Area end -->

        <!-- Footer -->
        <?php include 'include/common/footer.php'; ?>
        <!-- Footer -->

    </div>
    <!--End pagewrapper-->


    <!-- Jquery -->
    <script src=" assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Appear Js -->
    <script src="assets/js/appear.min.js"></script>
    <!-- Slick -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Nice Select -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- Image Loader -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- Jquery UI -->
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- Isotope -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!--  AOS Animation -->
    <script src="assets/js/aos.js"></script>
    <!-- Custom script -->
    <script src="assets/js/script.js"></script>

</body>

</html>