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
        $stmt = $bdd->prepare("UPDATE reservation SET statut = 'annulée' WHERE id_reservation = :id_reservation");
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
}


if (isset($_POST["payer"])) {
    if (isset($_POST['id_reservation']) && isset($_POST['telephone']) && isset($_POST['modePaiement'])) {
        $id_reservation = $_POST['id_reservation'];
        $telephone = $_POST['telephone'];
        $modePaiement = $_POST['modePaiement'];
        $sqMode = $bdd->prepare("SELECT * FROM modepaiement WHERE nom_modepaiement = ?");
        $sqMode->execute(array($modePaiement));
        if ($sqMode->rowCount() == 1) {
            $id_mode = $sqMode->fetch()['id_modepaiement'];
            $sql = $bdd->prepare("INSERT INTO paiement (id_reservation, id_mode_paiement, telephone) VALUES (?,?,?)");
            $sql->execute(array($id_reservation, $id_mode, $telephone));
            if ($sql) {
                $sql1 = $bdd->query("UPDATE reservation SET statut = 'payée' WHERE id_reservation = $id_reservation");
                $sql1->execute();
                if ($sql1) {
                    echo  json_encode(["code" => 200, "message" => "Paiement effectué avec succès"]);
                }
            } else {
                echo  json_encode(["code" => 500, "message" => "Erreur du serveur !"]);
            }
        } else {
            echo  json_encode(["code" => 400, "message" => "Ce mode de paiement n'existe pas !"]);
        }
    } else {
        echo  json_encode(["code" => 400, "message" => "Oups ! Quelque chose s'est mal passé !"]);
    }
}
