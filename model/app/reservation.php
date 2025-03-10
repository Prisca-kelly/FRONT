<?php
require("../config/database.php"); // Inclure la connexion
require("../config/util.php"); // Fichier 

if (!is_connected()) {
    echo  json_encode(["code" => 400, "message" => "Vous n'êtes pas connecté ! Veuillez vous connecter ou créer un compte si vous n'en avez pas !"]);
    die();
}
$user =  $_SESSION["id"];

if (isset($_POST["annuler"])) {
    if (isset($_POST['id_reservation'])) {
        $id_reservation = $_POST['id_reservation'];
        $stmt = $bdd->prepare("UPDATE reservation SET statut = 'Annulée' WHERE id_reservation = :id_reservation");
        $stmt->execute([':id_reservation' => $id_reservation]);
        if ($stmt) {
            echo  json_encode(["code" => 200, "message" => "Réservation annulée !"]);
        } else {
            echo  json_encode(["code" => 400, "message" => "Une erreur est survenue !"]);
        }
    } else {
        echo  json_encode(["code" => 400, "message" => "Oups ! Quelque chose s'est mal passé !"]);
    }
}

if (isset($_POST["enregistrer"])) {
    if (isset($_POST["date_depart"]) && isset($_POST["date_retour"]) && isset($_POST["id_destination"]) && isset($_POST["classe_souhaite"]) && isset($_POST["nombre_passager"])) {
        $date_depart = $_POST["date_depart"];
        $date_retour = $_POST["date_retour"];
        $id_destination = intval($_POST["id_destination"]);
        $classe_souhaite = htmlspecialchars($_POST["classe_souhaite"]);
        $nombre_passager = intval($_POST["nombre_passager"]);
        $remarques = empty($_POST["remarques"]) ? null : htmlspecialchars($_POST["remarques"]);
        if ($date_depart > $date_retour) {
            echo  json_encode(["code" => 400, "message" => "La date de départ doit être inférieure à la date de retour !"]);
            die();
        }
        $sql = $bdd->prepare("INSERT INTO reservation (id_utilisateur, id_destination, date_depart, date_retour, classe_souhaite, nombre_passager, remarques, date_creation) VALUES (?, ?, ?, ?, ?, ?, ?, NOW())");
        $sql->execute(array(
            $user,
            $id_destination,
            $date_depart,
            $date_retour,
            $classe_souhaite,
            $nombre_passager,
            $remarques,
        ));
        if ($sql) {
            echo  json_encode(["code" => 200, "message" => "Réservation enregistrée !"]);
        } else {
            echo  json_encode(["code" => 500, "message" => "Une erreur est survenue !"]);
        }
    } else {
        echo  json_encode(["code" => 400, "message" => "Remplissez tous les champs !"]);
    }
} else {
    echo  json_encode(["code" => 400, "message" => "Oups ! Quelque chose s'est mal passé !"]);
}
