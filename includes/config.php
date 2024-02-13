<?php
$dbHost = '172.70.2.135';
$dbUser = 'ETU002788'; 
$dbPassword = 'gPK8s46sa0O0';
$dbName = 'db_desp3_ETU002788'; 

$conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}
