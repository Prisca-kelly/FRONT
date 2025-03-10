<?php
require('model/config/database.php'); // Inclure la connexion
require('model/config/util.php'); // Fichier qui gère les sessions
init_session();
if (is_connected()) {
    $user =  $_SESSION["id"];
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <title>Billetterie</title>
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

        <!-- Page Banner Start -->

        <!-- Formulaire -->
        <?php include 'include/billetterieFormulaire.php'; ?>
        <!-- Formulaire -->

        <!-- Footer -->
        <?php include 'include/common/footer.php'; ?>
        <!-- Footer -->

    </div>

    <!-- Script -->
    <?php include 'include/common/script.php'; ?>
    <script>
        $("#enregistrer").click((e) => {
            e.preventDefault();
            let object = {
                date_depart: $("#date_depart").val(),
                date_retour: $("#date_retour").val(),
                id_destination: $("#id_destination").val(),
                classe_souhaite: $("#classe_souhaite").val(),
                nombre_passager: $("#nombre_passager").val(),
                remarques: $("#remarques").val(),
                enregistrer: "enregistrer"
            }
            $.ajax({
                type: "post",
                url: "model/app/reservation.php",
                data: object,
                dataType: "json",
                success: function(res) {
                    if (res.code === 200) {
                        successSweetAlert(res.message);
                    } else if (res.code === 400 || res.code === 500) {
                        errorSweetAlert(res.message);
                    }
                }
            });
        })
    </script>
</body>

</html>