<?php
require('model/config/database.php'); // Inclure la connexion
require('model/config/util.php'); // Fichier qui gère les sessions
$sql = $bdd->query("SELECT * FROM destination WHERE statut = 'Activé' ORDER BY id_destination DESC");
$destinations = $sql->fetchAll();
$total = $sql->rowCount();
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
        <section class="destinations-page-area pt-95 pb-90 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center counter-text-wrap mb-50 text-normal" data-aos="fade-up"
                            data-aos-duration="1500" data-aos-offset="50">
                            <h2>Découvrer nos destinations</h2>
                        </div>
                    </div>
                </div>
                <div class="row gap-10 row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 justify-content-center">
                    <?php
                    if ($total == 0) {
                        echo "<h5 class='text-center'>Aucune destination n'est disponible pour le moment</h5>";
                    }
                    foreach ($destinations as $destination) { ?>
                        <div class="col-xl-3 col-md-6">
                            <div class="destination-item style-two" data-aos="flip-up" data-aos-duration="1500"
                                data-aos-offset="50">
                                <div class="image">
                                    <img src="<?= FILE_PATH . $destination['image'] ?>" alt="Destination">
                                </div>
                                <div class="content">
                                    <h6><a href="destination-details.html"><?= $destination['nom'] ?></a></h6>
                                    <span class="time"><?= $destination['description'] ?></span>
                                    <a href="billetterie.php" class="more"><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>

                </div>
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