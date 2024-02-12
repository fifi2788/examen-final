<?php
$dbHost = 'localhost';//172.30.3.100 
$dbUser = 'root'; //ETU02788
$dbPassword = ''; // mot de passe serveur
$dbName = 'Gestion'; //db_desp3_ETU002788

$conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}
