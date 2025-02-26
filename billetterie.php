<?php
require('model/config/database.php'); // Inclure la connexion
require('model/config/util.php'); // Fichier qui gère les sessions
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
</body>

</html>