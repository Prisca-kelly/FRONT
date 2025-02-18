<?php
require('model/config/database.php'); // Inclure la connexion
require('model/config/util.php'); // Fichier qui gère les sessions
init_session();
if (is_connected()) {
    header("Location: client-accueil.php");
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <title>Inscription</title>
    <?php include 'include/common/head.php'; ?>
</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader">
            <div class="custom-loader"></div>
        </div>


        <!-- Bannière Start -->
        <div class="row d-flex justify-content-center align-items-center vh-100"
            style="background-image: url(assets/images/banner/pho1.jpeg); background-size: cover; background-position: center;">
            <div class="col-lg-6 col-md-8 col-sm-10 col-xs-10 col-10 bg-light-opacity">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="login-form">
                            <div class="text-center">
                                <a href="index.php">
                                    <img src="assets/images/logos/as-logo-2.png" alt="logo" class="img-fluid">
                                </a>
                            </div>
                            <h3 class="text-center as-color text-uppercase my-3">Inscription</h3>
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="nom">Nom complet</label>
                                        <input type="text" class="form-control" name="nom" id="nom" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="telephone">Téléphone</label>
                                        <input type="tel" class="form-control" name="telephone" id="telephone" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="adresse">Adresse</label>
                                        <input type="text" class="form-control" name="adresse" id="adresse" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" id="email" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="password">Mot de passe</label>
                                        <input type="password" class="form-control" name="password" id="password"
                                            required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="confirmPassword">Confirmez le mot de passe</label>
                                        <input type="password" class="form-control" name="confirmPassword"
                                            id="confirmPassword" required>
                                    </div>
                                    <div class="d-flex align-items-center as-color">
                                        <input type="checkbox" id="state" value="0" onchange="showPassword()">
                                        <label for="state">afficher les mot de passe</label>

                                    </div>
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" id="inscire" class="theme-btn style-two btn-blue">
                                        <span data-hover="Inscription">Inscription</span>&nbsp;
                                        <i class="fal fa-arrow-right"></i>
                                    </button>
                                </div>
                                <div class="text-center">
                                    <p>
                                        Vous avez déjà un compte ?
                                        <a href="./login.php" class="as-color">Connection</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bannière End -->
    </div>
    <!--End pagewrapper-->
    <?php include 'include/common/script.php'; ?>

    <script>
        function showPassword() {
            let checkbok = document.getElementById("state");
            if (checkbok.checked) {
                $("#password").attr("type", 'text');
                $("#confirmPassword").attr("type", 'text');
            } else {
                $("#password").attr("type", 'password');
                $("#confirmPassword").attr("type", 'password');
            }
        }


        $('#inscire').click((e) => {
            e.preventDefault();
            let data = {
                nom: $("#nom").val(),
                email: $("#email").val(),
                adresse: $("#adresse").val(),
                telephone: $("#telephone").val(),
                password: $("#password").val(),
                confirmPassword: $("#confirmPassword").val(),
                inscire: "inscire"
            }

            $.ajax({
                type: "post",
                url: "model/app/utilisateur.php",
                data: data,
                dataType: "text",
                success: function(response) {
                    console.log(response);

                    let res = JSON.parse(response);
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