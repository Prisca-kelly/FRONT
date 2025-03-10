<?php
require('model/config/database.php'); // Inclure la connexion
require('model/config/util.php'); // Fichier qui gère les sessions
init_session();
if (is_connected()) {
    $user =  $_SESSION["id"];

    $sqlClient = $bdd->prepare("SELECT * FROM utilisateur WHERE id_utilisateur = ?");
    $sqlClient->execute(array($user));
    if ($sqlClient->rowCount() == 1) {
        $client = $sqlClient->fetch();
    } else {
        header('Location: deconnexion.php');
    }
} else {
    header('Location: login.php');
}
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
                        <?php include 'include/common/cleint-menu.php'; ?>
                    </div>
                    <div class="col-lg-9">
                        <div class="destination-item style-three bgc-lighter d-block rounded-2 p-3">
                            <div class="row">
                                <div class="col-12 text-center mb-3">
                                    <h3>Informations personnelles</h3>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nom">Nom complet<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" value="<?= $client['nom'] ?>" name="nom"
                                            id="nom" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telephone">Téléphone<span class="text-danger">*</span></label>
                                        <input type="tel" class="form-control" value="<?= $client['telephone'] ?>"
                                            name="telephone" id="telephone" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="adresse">Adresse<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" value="<?= $client['adresse'] ?>"
                                            name="adresse" id="adresse" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email<span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" value="<?= $client['email'] ?>"
                                            disabled>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button id="update" class="theme-btn style-two btn-blue">
                                        <span data-hover="Enregistrer">Enregistrer</span>&nbsp;
                                        <i class="fal fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <br><br>

                        <div class="destination-item style-three bgc-lighter d-block rounded-2 p-3">
                            <div class="row">
                                <div class="col-12 text-center mb-3">
                                    <h3>Mot de passe</h3>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="actualPassword">Mot de passe actuel<span
                                                class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="actualPassword" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="newPassword">Nouveau mot de passe<span
                                                class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="newPassword" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="confirmPassword">Confirmez le mot de passe<span
                                                class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="confirmPassword" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex align-items-center as-color">
                                        <input type="checkbox" id="state" value="0" onchange="showPassword()">
                                        <label for="state">&nbsp; Afficher les mot de passe</label>

                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button id="updatePassword" class="theme-btn style-two btn-blue">
                                        <span data-hover="Enregistrer">Mettre à jour</span>&nbsp;
                                        <i class="fal fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
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
    <?php include 'include/common/script.php'; ?>
    <script>
        $('#update').click(function() {
            let data = {
                update: 'update',
                nom: $('#nom').val(),
                telephone: $('#telephone').val(),
                adresse: $('#adresse').val()
            };
            $.ajax({
                type: 'POST',
                url: 'model/app/utilisateur.php',
                data: data,
                dataType: "json",
                success: function(res) {
                    if (res.code === 200) {
                        successSweetAlert(res.message);
                    } else if (res.code === 400 || res.code === 500) {
                        errorSweetAlert(res.message);
                    }
                }
            });
        });

        $('#updatePassword').click(function() {
            let data = {
                updatePassword: 'updatePassword',
                actualPassword: $('#actualPassword').val(),
                newPassword: $('#newPassword').val(),
                confirmPassword: $('#confirmPassword').val()
            };
            $.ajax({
                type: 'POST',
                url: 'model/app/utilisateur.php',
                data: data,
                dataType: "json",
                success: function(res) {
                    if (res.code === 200) {
                        successSweetAlert(res.message);
                    } else if (res.code === 400 || res.code === 500) {
                        errorSweetAlert(res.message);
                    }
                }
            });
        });

        function showPassword() {
            let checkbok = document.getElementById("state");
            if (checkbok.checked) {
                $("#actualPassword").attr("type", 'text');
                $("#newPassword").attr("type", 'text');
                $("#confirmPassword").attr("type", 'text');
            } else {
                $("#actualPassword").attr("type", 'password');
                $("#newPassword").attr("type", 'password');
                $("#confirmPassword").attr("type", 'password');
            }
        }
    </script>

</body>

</html>