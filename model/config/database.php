<?php
session_start();
$dbname = "agencevoyage";
$dbuser = "exp_user";
$password = "ossas2023";
$bdd = new PDO("mysql:host=127.0.0.1;dbname=" . $dbname . ";charset=utf8", "" . $dbuser . "", "" . $password . "");
if (!$bdd) {
    die("La Connexion a échoué : " . mysqli_connect_error());
}
