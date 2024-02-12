<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = 'root';
$dbName = 'Gestion';

$conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}
