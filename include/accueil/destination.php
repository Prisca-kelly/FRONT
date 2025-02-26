<?php
$sqlDesti = $bdd->query("SELECT * FROM destination WHERE statut = 'Activé' ORDER BY id_destination DESC");
$destinations = $sqlDesti->fetchAll();
$totalDest = $sqlDesti->rowCount();
?>

<section class="popular-destinations-area rel z-1">
    <div class="container-fluid">
        <div class="popular-destinations-wrap br-20 bgc-lighter pt-100 pb-70">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-center counter-text-wrap mb-70" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h2>Decouvrir les destinations populaires</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <?php
                    if ($total == 0) {
                        echo "<h5 class='text-center'>Aucun article n'est disponible pour le moment</h5>";
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
        </div>
    </div>
</section>