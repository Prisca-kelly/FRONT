<?php
$sql = $bdd->query("SELECT * FROM hotel WHERE statut = 'activé' ORDER BY id_hotel DESC");
$hotels = $sql->fetchAll();
$total = $sql->rowCount();
?>
<!-- Hôtes start -->
<section class="destinations-area bgc-black pt-100 pb-70 rel z-1">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-white text-center counter-text-wrap mb-70" data-aos="fade-up"
                    data-aos-duration="1500" data-aos-offset="50">
                    <h2>Découvrir les trésors du monde avec AS Finanial</h2>
                    <p>Plusieurs expériences dont vous vous souviendrez</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php
            if ($total == 0) {
                echo "<h5 class='text-center'>Aucun article n'est disponible pour le moment</h5>";
            }
            foreach ($hotels as $hotel) { ?>
                <div class="col-xxl-3 col-xl-4 col-md-6">
                    <div class="destination-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image" style="height: 250px;">
                            <img src="<?= FILE_PATH . $hotel['image'] ?>" alt="hotel" class="img-fluid">
                        </div>
                        <div class="content">
                            <span class="location">
                                <i class="fal fa-map-marker-alt"></i> <?= $hotel['ville'] ?>
                            </span>
                            <h5><a href="destination-details.html"><?= $hotel['nom'] ?></a></h5>
                            <span class="time"><?= $hotel['dure'] ?> nuit(s)</span>
                        </div>
                        <div class="destination-footer">
                            <span class="price"><span><?= intval($hotel['prix']) ?> FCFA</span>/par suite</span>
                            <a href="billetterie.php" class="read-more">
                                Réservez maintenant <i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>
</section>
<!-- Hôtes end -->