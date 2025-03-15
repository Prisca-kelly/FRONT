<?php
require('model/config/database.php'); // Inclure la connexion
require('model/config/util.php'); // Fichier qui gère les sessions
init_session();
if (!is_connected()) {
    header('Location: login.php');
}

$user =  $_SESSION["id"];
$page = "historique";

$sqlR = $bdd->query("SELECT r.montant, r.id_reservation, r.id_destination, r.date_depart, r.date_retour, r.classe_souhaite, r.nombre_passager, r.remarques, r.date_creation, r.statut, d.nom, d.description, d.image FROM reservation r, destination d WHERE r.id_destination = d.id_destination AND r.id_utilisateur = $user ORDER BY r.id_reservation DESC");
$reservations = $sqlR->fetchAll();
$total = $sqlR->rowCount();

$sqMode = $bdd->query("SELECT * FROM modepaiement WHERE statut = 'actif'");
$modes = $sqMode->fetchAll();
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
        <section class="tour-list-page py-50 rel z-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-10 rmb-75">
                        <?php include 'include/common/cleint-menu.php'; ?>
                    </div>
                    <div class="col-lg-9">
                        <?php
                        if ($total == 0) echo "<h2>Vous n'avez aucune réservation</h2>";
                        foreach ($reservations as $reservation) { ?>
                            <div class="destination-item style-three bgc-lighter" data-aos="fade-up"
                                data-aos-duration="1500" data-aos-offset="50">
                                <div class="image">
                                    <?php
                                    if ($reservation['statut'] == 'validée') echo '<span class="badge badge">Validé</span>';
                                    else if ($reservation['statut'] == "rejetée") echo '<span class="badge bgc-pink">Rejetée</span>';
                                    else if ($reservation['statut'] == "annulée") echo '<span class="badge bgc-pink">Annulée</span>';
                                    else if ($reservation['statut'] == "payée") echo '<span class="badge bgc-primary">Payée</span>';
                                    ?>
                                    <img src="<?= FILE_PATH . $reservation['image'] ?>" alt="<?= $reservation['nom'] ?>">
                                </div>
                                <div class="content w-100">
                                    <h5><a href="tour-details.html"><?= $reservation['nom'] ?></a></h5>
                                    <!-- <p>Bali, Indonesia, is tropical paradise renowned breathtaking beaches, vibrant culture,
                                    and lush landscapes</p> -->
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="far fa-plane-departure"></i> <?= $reservation['date_depart'] ?>

                                        </li>
                                        <li>
                                            <i class="far fa-user"></i><?= $reservation['nombre_passager'] ?>
                                        </li>
                                    </ul>
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="far fa-plane-arrival"></i> <?= $reservation['date_retour'] ?>
                                        </li>
                                        <li>
                                            <i class="far fa-chair"></i><?= $reservation['classe_souhaite'] ?>
                                        </li>
                                    </ul>
                                    <div class="destination-footer d-flex justify-content-between">
                                        <?= $reservation['date_creation'] ?>
                                        <div>
                                            <?php
                                            if ($reservation['statut'] == 'nouveau' || $reservation['statut'] === 'validée') { ?>
                                                <a href="#!" onclick="cancel(<?= $reservation['id_reservation'] ?>)"
                                                    class="theme-btn danger style-two style-three">
                                                    <span data-hover="Annuler">Annuler</span> &nbsp;
                                                    <i class="fal fa-times"></i>
                                                </a>
                                            <?php }
                                            ?>
                                            <?php
                                            if ($reservation['statut'] == 'validée') { ?>
                                                <a href="#!" class="theme-btn style-two style-three" onclick="payer(<?= $reservation['id_reservation'] ?>, <?= $reservation['montant'] ?>)">
                                                    <span data-hover="Payer">Payer</span> &nbsp;
                                                    <i class="far fa-check"></i>
                                                </a>
                                            <?php }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
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


    <div class="modal fade" id="payeModal" tabindex="-1" aria-labelledby="payeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="payeModalLabel">Paiement de la reservation</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="style-three bgc-lighter p-3">
                        <h5 class="mb-3">Montant à payer : <span id="montant" class="fw-bolder"></span> </h5>
                        <input type="hidden" id="id_reservation">
                        <div class="mb-5">
                            <div class="form-group">
                                <select name="mode_paiement" id="mode_paiement" required aria-required="true">
                                    <option value="" disabled selected>Choisissez Le mode de paiement</option>
                                    <?php
                                    foreach ($modes as $mode) { ?>
                                        <option value="<?= $mode['nom_modepaiement'] ?>"><?= $mode['nom_modepaiement'] ?></option>
                                    <?php }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <br /> <br />
                        <div class="mb-5">
                            <div class="form-group">
                                <label for="telephone">Numéro de téléphone *</label>
                                <input type="tel" min="1" id="telephone" name="telephone"
                                    class="form-control" placeholder="Numéro de téléphone" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="theme-btn danger style-two style-three px-4 py-2 rounded-3" data-bs-dismiss="modal">
                        <span data-hover="Annuler">Annuler</span> &nbsp;
                        <i class="fal fa-times"></i>
                    </a>
                    <a href="#!" class="theme-btn style-two style-three px-4 py-2 rounded-3" id="payer">
                        <span data-hover="Payer">Payer</span> &nbsp;
                        <i class="far fa-check"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery -->
    <?php include 'include/common/script.php'; ?>

    <script>
        let regexAirtel = /^(077|074|076)[0-9]{6}$/;
        let regexMoov = /^(066|062|060)[0-9]{6}$/;
        $('#payer').click((e) => {
            e.preventDefault();
            let telephone = $('#telephone').val();
            let id_reservation = $('#id_reservation').val();
            let modePaiement = $('#mode_paiement').val();

            if (modePaiement === "AIRTEL MONEY" || modePaiement === "MOOV MONEY") {
                let reg = modePaiement == "AIRTEL MONEY" ? regexAirtel : regexMoov;
                if (verifierNumero(reg, telephone)) {
                    $.ajax({
                        url: 'model/app/reservation.php',
                        type: 'POST',
                        data: {
                            payer: 'payer',
                            telephone: telephone,
                            modePaiement: modePaiement,
                            id_reservation: id_reservation
                        },
                        dataType: "json",
                        success: function(response) {
                            if (response.code === 200) {
                                successSweetAlert(response.message);
                            } else if (response.code === 400 || response.code === 500) {
                                errorSweetAlert(response.message);
                            }
                        }
                    });
                } else {
                    errorSweetAlert("Numéro de téléphone invalide");
                }

            } else {
                errorSweetAlert("Les transactions via " + modePaiement + " sont indisponible pour le moment");
            }
        })

        function verifierNumero(regex, telephone) {
            if (regex.test(telephone)) {
                return true;
            } else {
                return false;
            }
        }

        function cancel(id) {
            confirmSweetAlert("Voulez-vous vraiment annuler cette reservation ?").then(out => {
                if (out.isConfirmed) {
                    $.ajax({
                        url: 'model/app/reservation.php',
                        type: 'POST',
                        data: {
                            annuler: 'annuler',
                            id_reservation: id
                        },
                        dataType: "text",
                        success: function(response) {
                            let res = JSON.parse(response);
                            if (res.code === 200) {
                                successSweetAlert(res.message);
                            } else if (res.code === 400 || res.code === 500) {
                                errorSweetAlert(res.message);
                            }
                        }
                    });
                }
            });
        }

        function payer(id_reservation, montant) {
            $('#id_reservation').val(id_reservation)
            $('#montant').text(montant + " FCFA")
            var payeModal = new bootstrap.Modal(document.getElementById('payeModal'));
            payeModal.show();
        }

        $
    </script>

</body>

</html>