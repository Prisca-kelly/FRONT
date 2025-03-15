<?php
require('model/config/database.php'); // Inclure la connexion
require('model/config/util.php'); // Fichier qui gère les sessions

if (isset($_GET['article']) && !empty($_GET['article']) && intval($_GET['article']) > 0) {
    $id = $_GET['article'];
    $sql = $bdd->query("SELECT * FROM articleblog WHERE id_article = $id");
    $blog = $sql->fetch();
?>

    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <title><?= $blog['titre'] ?></title>
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


            <!-- Blog Detaisl Area start -->
            <section class="blog-detaisl-page py-100 rel z-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="blog-details-content" data-aos="fade-up" data-aos-duration="1500"
                                data-aos-offset="50">
                                <h5><?= $blog['titre'] ?></h5>

                                <div class="image mt-40 mb-30" data-aos="fade-up" data-aos-duration="1500"
                                    data-aos-offset="50">
                                    <img src="<?= FILE_PATH . $blog['image'] ?>" class="img-fluid" alt="Blog Details">
                                </div>
                                <p><?= htmlspecialchars_decode($blog['contenu']) ?></p>
                            </div>

                            <hr class="mb-45">

                            <div class="tag-share mb-50">
                                <div class="item" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                                    <h6>Tags </h6>
                                    <div class="tag-coulds">
                                        <a href="destination.php">Destination</a>
                                        <a href="#">Tourisme</a>
                                        <a href="#">Visa</a>
                                    </div>
                                </div>
                                <div class="item" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                                    <?php echo $blog['date_publication']; ?>
                                </div>
                            </div>


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
            <!-- Blog Detaisl Area end -->


            <!-- Footer -->
            <?php include 'include/common/footer.php'; ?>
            <!-- Footer -->

        </div>
        <!--End pagewrapper-->
        <?php include 'include/common/script.php'; ?>

    </body>

    </html>
<?php
} else {
    header('Location: blog.php');
}
?>