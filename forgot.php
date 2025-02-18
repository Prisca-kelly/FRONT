<!DOCTYPE html>
<html lang="fr">

<head>

    <title>Mot de passe oublié</title>
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
                            <h3 class="text-center as-color text-uppercase my-3">Mot de passe oublié</h3>
                            <form action="login.php" method="post">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="form-group text-center">
                                    <button disabled type="submit" class="theme-btn style-two btn-blue">
                                        <span data-hover="Envoyer">Envoyer</span>&nbsp;
                                        <i class="fal fa-arrow-right"></i>
                                    </button>
                                </div>
                                <div class="text-center">
                                    <p>
                                        <a href="login.php" class="as-color">Connexion</a>
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

</body>

</html>