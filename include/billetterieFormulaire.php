<?php
if (is_connected()) {
    if (isset($_POST['enregistrer'])) {
        if (isset($_POST['date_depart']) && isset($_POST['id_destination']) && isset($_POST['classe_souhaite']) && isset($_POST['nombre_passager']) && isset($_POST['remarques'])) {
            $date_depart = $_POST['date_depart'];
            $date_retour = $_POST['date_retour'];
            $id_destination = $_POST['id_destination'];
            $classe_souhaite = $_POST['classe_souhaite'];
            $nombre_passager = $_POST['nombre_passager'];
            $remarques = $_POST['remarques'];
            $id_client = $user;
            if (!empty($date_retour) && !empty($date_depart) && !empty($id_destination) && !empty($classe_souhaite) && !empty($nombre_passager)) {
                $sql = $bdd->prepare("INSERT INTO reservation (id_utilisateur, id_destination, date_depart, date_retour, classe_souhaite, nombre_passager, remarques, date_creation) VALUES (?, ?, ?, ?, ?, ?, ?, NOW())");
                $sql->execute(array(
                    $id_client,
                    $id_destination,
                    $date_depart,
                    $date_retour,
                    $classe_souhaite,
                    $nombre_passager,
                    $remarques,
                ));
                if ($sql) {
                    echo "<script>alert('Réservation effectuée avec succès')</script>";
                } else {
                    echo "<script>alert('Echec de la réservation')</script>";
                }
            } else {
                echo "<script>alert('Veuillez remplir tous les champs')</script>";
            }
        }
    }
}
?>
<section class="contact-form-area py-70 rel z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="comment-form bgc-lighter z-1 rel mb-30 rmb-55">
                    <form id="contactForm" class="contactForm" name="contactForm" data-aos="fade-left"
                        data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title">
                            <h2>Reservation</h2>
                        </div>
                        <div class="row mt-35">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date_depart">Date d'aller *</label>
                                    <input type="date" id="date_depart" name="date_depart" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date_retour">Date de retour</label>
                                    <input type="date" id="date_retour" name="date_retour" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="id_destination">Destination *</label>
                                    <select name="id_destination" id="id_destination" required aria-required="true">
                                        <option value="0" disabled selected>Choisissez une destination</option>
                                        <?php
                                        $sql = $bdd->query("SELECT * FROM destination WHERE statut = 'Activé' ORDER BY id_destination DESC");
                                        $destinations = $sql->fetchAll();
                                        $total = $sql->rowCount();
                                        foreach ($destinations as $destination) { ?>
                                            <option value="<?= $destination['id_destination'] ?>"><?= $destination['nom'] ?>
                                            </option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="classe_souhaite">Classe souhaitée *</label>
                                    <select name="classe_souhaite" id="classe_souhaite" required aria-required="true">
                                        <option value="" disabled selected>Choisissez une classe</option>
                                        <option value="Classe économique">Classe économique</option>
                                        <option value="Classe affaires">Classe affaires</option>
                                        <option value="Première classe">Première classe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre_passager">Nombre de place *</label>
                                    <input type="number" min="1" id="nombre_passager" name="nombre_passager"
                                        class="form-control" placeholder="Nombre de place" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="remarques">Remarque</label>
                                    <textarea name="remarques" id="remarques" class="form-control" rows="5"
                                        placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <button type="button" name="enregistrer" id="enregistrer"
                                        class="theme-btn style-two">
                                        <span data-hover="Enregistrer">Enregistrer</span> &nbsp;
                                        <i class="fal fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-images-part" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <div class="row">
                        <div class="col-12">
                            <img src="assets/images/contact/R.jpg" alt="Contact">
                        </div>
                        <div class="col-6">
                            <img src="assets/images/contact/RE.jpg" alt="Contact">
                        </div>
                        <div class="col-6">
                            <img src="assets/images/contact/U.jpg" alt="Contact">
                        </div>
                    </div>
                    <div class="circle-logo">
                        <img src="assets/images/contact/icon.png" alt="Logo">
                        <span class="title h2">Ravelo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>