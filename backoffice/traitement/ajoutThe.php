<?php
include_once '../../includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom_variete = $_POST['nom_variete'];
    $occupation = $_POST['occupation'];
    $rendement_pied = $_POST['rendement_pied'];

    if (ajouterVarieteThe($nom_variete, $occupation, $rendement_pied)) {
        $message = '<div class="alert alert-success" role="alert">Variété de thé ajoutée avec succès!</div>';
    } else {
        $message = '<div class="alert alert-danger" role="alert">Erreur lors de l\'ajout de la variété de thé.</div>';
    }

    // Rediriger vers la page principale avec le message
    header("Location: gestionThe.php?message=" . urlencode($message));
    exit();
}
?>
