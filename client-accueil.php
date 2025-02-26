<?php
require('model/config/database.php'); // Inclure la connexion
require('model/config/util.php'); // Fichier qui gère les sessions

$page = "profile";
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
                                        <a href="#" class="<?= $page == 'profile' ? 'active' : ''; ?>">
                                            <i class="fas fa-user me-2"></i> Profil
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="<?= $page == 'historique' ? 'active' : ''; ?>">
                                            <i class="fas fa-history me-2"></i> Historique des commandes
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="<?= $page == 'notifications' ? 'active' : ''; ?>">
                                            <i class="fas fa-bell me-2"></i> Notifications
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="<?= $page == 'securite' ? 'active' : ''; ?>">
                                            <i class="fas fa-shield-alt me-2"></i> Sécurité
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget widget-cta" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="content text-white">
                                <span class="h6">Envie d'explorer le monde</span>
                                <h3>Visitez nos destinations</h3>
                                <a href="tour-list.html" class="theme-btn style-two bgc-secondary">
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
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque aliquid, expedita pariatur id
                            exercitationem mollitia harum. Consectetur, facilis, cumque cum sit labore velit doloremque
                            modi molestiae laboriosam, neque totam distinctio!
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