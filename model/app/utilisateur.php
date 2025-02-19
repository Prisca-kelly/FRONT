<?php
require('../config/database.php'); // Inclure la connexion
require('../config/util.php'); // Fichier 

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['inscire'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $mot_de_passe = $_POST['password'];
    $mot_de_passe2 = $_POST['confirmPassword'];

    if (!empty($nom) && !empty($email) && !empty($telephone) && !empty($adresse) && !empty($mot_de_passe) && !empty($mot_de_passe2)) {
        if ($mot_de_passe === $mot_de_passe2) {
            $password = sha1($mot_de_passe);
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                $stmt = $bdd->prepare("INSERT INTO utilisateur (nom, email, telephone, adresse, mot_de_passe, `role`) VALUES (:nom, :email, :telephone, :adresse, :mot_de_passe, :role)");
                $stmt->execute([
                    ':nom' => $nom,
                    ':email' => $email,
                    ':telephone' => $telephone,
                    ':adresse' => $adresse,
                    ':mot_de_passe' => $password,
                    ':role' => "CLIENT"
                ]);
                echo  json_encode(["code" => 200, "message" => "Inscription réussie !"]);
            } else {
                echo  json_encode(["code" => 400, "message" => "E-mail invalide !"]);
            }
        } else {
            echo  json_encode(["code" => 400, "message" => "Les mot de passes ne sont pas identiques !"]);
        }
    } else {
        echo  json_encode(["code" => 400, "message" => "Remplissez tous les champs !"]);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = sha1($_POST['password']);

    if (!empty($email) && !empty($password)) {
        $stmt = $bdd->prepare("SELECT * FROM utilisateur WHERE email = :email AND mot_de_passe = :mot_de_passe");
        $stmt->execute([':email' => $email, ':mot_de_passe' => $password,]);
        if ($stmt) {
            if ($stmt->rowCount() == 1) {
                $user = $stmt->fetch();
                if ($user['role'] == "CLIENT") {
                    init_session();
                    $_SESSION["id"] = $user["id_utilisateur"];
                    echo  json_encode(["code" => 200, "message" => "Connexion réussie !"]);
                } else {
                    echo  json_encode(["code" => 400, "message" => "Accès refusé !"]);
                }
            } else {
                echo  json_encode(["code" => 400, "message" => "Email ou mot de passe incorrect !"]);
            }
        } else {
            echo  json_encode(["code" => 400, "message" => "Erreur du serveur !"]);
        }
    } else {
        echo  json_encode(["code" => 400, "message" => "Remplissez tous les champs !"]);
    }
}
