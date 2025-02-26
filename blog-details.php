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
                            <p><?= $blog['contenu'] ?></p>
                            <!-- <ul class="blog-meta mb-30">
                                <li><img src="assets/images/blog/admin.jpg" alt="Admin"> <a href="#">Reed A. Johnson</a>
                                </li>
                                <li><i class="far fa-calendar-alt"></i> <a href="#">25 Feb 2024</a></li>
                                <li><i class="far fa-comments"></i> <a href="#">Comments (5)</a></li>
                            </ul> -->

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

                        <!-- <form id="comment-form" class="comment-form bgc-lighter z-1 rel mt-25" name="review-form"
                                action="#" method="post" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h5>Leave A Comments</h5>
                                <p>Your email address will not be published. Required fields are marked *</p>
                                <div class="row gap-20 mt-30">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="full-name" name="full-name" class="form-control"
                                                placeholder="Name" value="" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" id="email-address" name="email" class="form-control"
                                                placeholder="Email" value="" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control" rows="5"
                                                placeholder="Message" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <ul class="radio-filter mb-25">
                                                <li>
                                                    <input class="form-check-input" type="radio" name="terms-condition"
                                                        id="terms-condition">
                                                    <label for="terms-condition">Save my name, email, and website in this
                                                        browser for the next time I comment.</label>
                                                </li>
                                            </ul>
                                            <button type="submit" class="theme-btn style-two">
                                                <span data-hover="Send Comments">Send Comments</span>
                                                <i class="fal fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form> -->

                    </div>
                    <div class="col-lg-4 col-md-8 col-sm-10 rmt-75">
                        <div class="blog-sidebar">

                            <?php include './include/blogFavori.php'; ?>

                            <div class="widget widget-gallery" data-aos="fade-up" data-aos-duration="1500"
                                data-aos-offset="50">
                                <h5 class="widget-title">Gallery</h5>
                                <div class="gallery">
                                    <a href="assets/images/widgets/gallery1.jpg">
                                        <img src="assets/images/widgets/gallery1.jpg" alt="Gallery">
                                    </a>
                                    <a href="assets/images/widgets/gallery2.jpg">
                                        <img src="assets/images/widgets/gallery2.jpg" alt="Gallery">
                                    </a>
                                    <a href="assets/images/widgets/gallery3.jpg">
                                        <img src="assets/images/widgets/gallery3.jpg" alt="Gallery">
                                    </a>
                                    <a href="assets/images/widgets/gallery4.jpg">
                                        <img src="assets/images/widgets/gallery4.jpg" alt="Gallery">
                                    </a>
                                    <a href="assets/images/widgets/gallery5.jpg">
                                        <img src="assets/images/widgets/gallery5.jpg" alt="Gallery">
                                    </a>
                                    <a href="assets/images/widgets/gallery6.jpg">
                                        <img src="assets/images/widgets/gallery6.jpg" alt="Gallery">
                                    </a>
                                    <a href="assets/images/widgets/gallery7.jpg">
                                        <img src="assets/images/widgets/gallery7.jpg" alt="Gallery">
                                    </a>
                                    <a href="assets/images/widgets/gallery8.jpg">
                                        <img src="assets/images/widgets/gallery8.jpg" alt="Gallery">
                                    </a>
                                    <a href="assets/images/widgets/gallery9.jpg">
                                        <img src="assets/images/widgets/gallery9.jpg" alt="Gallery">
                                    </a>
                                </div>
                            </div>

                            <div class="widget widget-cta" data-aos="fade-up" data-aos-duration="1500"
                                data-aos-offset="50">
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