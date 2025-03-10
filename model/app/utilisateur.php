<?php
require('../config/database.php'); // Inclure la connexion
require('../config/util.php'); // Fichier 
init_session();
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

if (is_connected()) {
    $id_utilisateur = $_SESSION["id"];

    if (isset($_POST['update']) && $_POST['update'] == 'update') {
        if (!empty($_POST['nom']) && !empty($_POST['telephone']) && !empty($_POST['adresse'])) {
            $nom = htmlspecialchars($_POST['nom']);
            $telephone = htmlspecialchars($_POST['telephone']);
            $adresse = htmlspecialchars($_POST['adresse']);

            $stmt = $bdd->prepare("UPDATE utilisateur SET nom = ?, telephone = ?, adresse = ? WHERE id_utilisateur = ?");
            $stmt->execute(array(
                $nom,
                $telephone,
                $adresse,
                $id_utilisateur
            ));
            if ($stmt) {
                echo  json_encode(["code" => 200, "message" => "Mise à jour réussie !"]);
            } else {
                echo  json_encode(["code" => 400, "message" => "Une erreur est survenue lors de la mise à jour !"]);
            }
        } else {
            echo  json_encode(["code" => 400, "message" => "Remplissez tous les champs !"]);
        }
    }

    if (isset($_POST['updatePassword']) && $_POST['updatePassword'] === "updatePassword") {
        if (!empty($_POST['actualPassword']) && !empty($_POST['newPassword']) && !empty($_POST['confirmPassword'])) {
            $actualPassword = $_POST['actualPassword'];
            $newPassword = $_POST['newPassword'];
            $confirmPassword = $_POST['confirmPassword'];
            if ($newPassword === $confirmPassword) {
                $password = sha1($newPassword);
                $sql = $bdd->prepare("SELECT * FROM utilisateur WHERE id_utilisateur = ?");
                $sql->execute(array($id_utilisateur));
                $user = $sql->fetch();
                if ($user["mot_de_passe"] == sha1($actualPassword)) {
                    $update = $bdd->prepare("UPDATE utilisateur SET mot_de_passe = ? WHERE id_utilisateur = ?");
                    $update->execute(array($password, $id_utilisateur));
                    if ($update) {
                        echo json_encode(["code" => 200, "message" => "Mot de passe modifié avec succès !"]);
                    } else {
                        echo json_encode(["code" => 400, "message" => "Une erreur s'est produite !"]);
                    }
                } else {
                    echo json_encode(["code" => 400, "message" => "Votre mot de passe actuel est incorrect !"]);
                }
            } else {
                echo  json_encode(["code" => 400, "message" => "Le nouveau et le mot de passe de confirmation doivent être identiques"]);
            }
        } else {
            echo  json_encode(["code" => 400, "message" => "Remplissez tous les champs !"]);
        }
    }
}
