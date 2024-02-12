<?php
include_once 'config.php'; // Assurez-vous que le fichier config.php est inclus

function login($email, $mot_de_passe) {
    global $conn;

    $escaped_email = mysqli_real_escape_string($conn, $email);
    $escaped_mot_de_passe = mysqli_real_escape_string($conn, $mot_de_passe);

    $sql = "SELECT * FROM user WHERE email = '$escaped_email' AND mot_de_passe = '$escaped_mot_de_passe'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        return true;
    } else {
        return false;
    }
}
function ajouterVarieteThe($nom_variete, $occupation, $rendement_pied) {
    global $conn;

    $escaped_nom_variete = mysqli_real_escape_string($conn, $nom_variete);
    $escaped_occupation = mysqli_real_escape_string($conn, $occupation);
    $escaped_rendement_pied = mysqli_real_escape_string($conn, $rendement_pied);

    $sql = "INSERT INTO tea_varieties (nom_variete, occupation, rendement_pied) VALUES ('$escaped_nom_variete', '$escaped_occupation', '$escaped_rendement_pied')";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}
