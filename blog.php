<?php
require('model/config/database.php'); // Inclure la connexion
require('model/config/util.php'); // Fichier qui gère les sessions

$sql = $bdd->query("SELECT * FROM articleblog WHERE statut = 'publié' ORDER BY id_article DESC");
$blogs = $sql->fetchAll();
$total = $sql->rowCount();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Blog</title>
    <?php include 'include/common/head.php'; ?>
</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader">
            <div class="custom-loader"></div>
        </div>

        <!-- main header -->
        <?php include 'include/common/navbar0.php'; ?>


        <!--Form Back Drop-->
        <div class="form-back-drop"></div>


        <!-- Page Banner Start -->
        <!-- <section class="page-banner-area rel z-1 bgs-cover"
            style="background-image: url(assets/images/banner/banner.jpg);">
            <div class="container">
                <div class="banner-inner text-white">
                    <h2 class="page-title mb-10" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">Blog
                        List View</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-20" data-aos="fade-right" data-aos-delay="200"
                            data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Blog List</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section> -->
        <!-- Page Banner End -->


        <!-- Blog List Area start -->
        <section class="blog-list-page py-100 rel z-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <?php
                        if ($total == 0) {
                            echo "<h5 class='text-center'>Aucun article n'est disponible pour le moment</h5>";
                        }
                        foreach ($blogs as $blog) { ?>
                            <div class="blog-item style-three" data-aos="fade-up" data-aos-duration="1500"
                                data-aos-offset="50">
                                <div class="image">
                                    <img src="<?= FILE_PATH . $blog['image'] ?>" alt="Blog List">
                                </div>
                                <div class="content">
                                    <h5>
                                        <a href="blog-details.php?article=<?php echo $blog['id_article']; ?>">
                                            <?php echo $blog['titre']; ?>
                                        </a>
                                    </h5>
                                    <ul class="blog-meta text-end">
                                        <li>
                                            <i class="far fa-calendar-alt"></i> <a href="#">
                                                <?php echo $blog['date_publication']; ?>
                                            </a>
                                        </li>
                                    </ul>

                                    <a href="blog-details.php?article=<?php echo $blog['id_article']; ?>"
                                        class="theme-btn style-two style-three">
                                        <span data-hover="Voir plus">Voir plus &nbsp;</span>
                                        <i class="fal fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        <?php }
                        ?>
                    </div>
                    <div class="col-lg-4 col-md-8 col-sm-10 rmt-75">
                        <div class="blog-sidebar">

                            <?php include './include/blogFavori.php'; ?>

                            <div class="widget widget-cta" data-aos="fade-up" data-aos-duration="1500"
                                data-aos-offset="50">
                                <div class="content text-white">
                                    <span class="h6">Envie d'explorer le monde</span>
                                    <h3>Visitez nos destinations</h3>
                                    <a href="destination.php" class="theme-btn style-two bgc-secondary">
                                        <span data-hover="Visiter maintenant">Visiter maintenant&nbsp;</span>
                                        <i class="fal fa-arrow-right"></i>
                                    </a>
                                </div>
                                <div class="image">
                                    <img src="assets/images/destinations/OIP1.jpg" alt="CTA">
                                </div>
                                <div class="cta-shape"><img src="assets/images/widgets/cta-shape.png" alt="Shape"></div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Blog List Area end -->


        <!-- Footer -->
        <?php include 'include/common/footer.php'; ?>
        <!-- Footer -->

    </div>
    <!--End pagewrapper-->

    <?php include 'include/common/script.php'; ?>

</body>

</html>