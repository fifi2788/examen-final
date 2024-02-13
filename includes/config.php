<?php
$dbHost = '172.70.7.134 ';//
$dbUser = 'ETU02788'; //
$dbPassword = ''; // mot de passe serveur
$dbName = 'db_desp3_ETU002788'; //

$conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}
