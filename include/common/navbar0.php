<header class="main-header header-one">
    <!--Header-Upper-->
    <div class="header-upper bg-white py-30 rpy-0">
        <div class="container-fluid clearfix">

            <div class="header-inner rel d-flex align-items-center">
                <div class="logo-outer">
                    <div class="logo">
                        <a href="index.php">
                            <img src="assets/images/logos/as-logo-2.png" alt="Logo" title="Logo">
                            <!-- <img src="assets/images/logo.png" alt="Logo" title="Logo"> -->
                        </a>
                    </div>
                </div>

                <div class="nav-outer mx-lg-auto ps-xxl-5 clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header">
                            <div class="mobile-logo">
                                <a href="index.php">
                                    <img src="assets/images/logos/as-logo-2.png" alt="Logo" title="Logo">
                                </a>
                            </div>

                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-bs-toggle="collapse"
                                data-bs-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="index.php">Accueil</a></li>
                                <li><a href="about.php">À propos</a></li>
                                <li><a href="billetterie.php">Billetterie</a></li>
                                <li><a href="destination.php">Destinations</a></li>
                                <li><a href="services.php">Services</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="blog.php">Blog</a></li>
                            </ul>
                        </div>

                    </nav>
                    <!-- Main Menu End-->
                </div>

                <!-- Menu Button -->
                <div class="menu-btns py-10">
                    <a href="<?php if (isset($_SESSION['id']) && $_SESSION['id'] > 0) {
                                    echo "client-accueil.php";
                                } else {
                                    echo "login.php";
                                } ?>" class="theme-btn style-two bgc-secondary">
                        <i class="fas fa-user"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->
</header>