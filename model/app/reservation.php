<?php
require('../config/database.php'); // Inclure la connexion
require('../config/util.php'); // Fichier 

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['annuler'])) {
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
