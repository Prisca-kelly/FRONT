<?php
$sql = $bdd->prepare("SELECT * FROM utilisateur WHERE email =?");
$sql->execute(array("admin@gmail.com"));

if ($sql->rowCount() == 0) {
    $nom = "Administrateur";
    $address = "Libreville";
    $email = "admin@gmail.com";
    $telephone = "077101010";
    $password = sha1("password");
    $ins = $bdd->prepare("INSERT INTO utilisateur (nom, email, adresse, telephone, mot_de_passe, role) 
            VALUES (:nom, :email,:adresse, :telephone, :mot_de_passe, :role)");
    $ins->execute([
        ':nom' => $nom,
        ':email' => $email,
        ':adresse' => $address,
        ':telephone' => $telephone,
        ':mot_de_passe' => $password,
        'role' => 'ADMIN'
    ]);
}
