<?php
// Nom du cookie
$cookie_name = "prenom";

// Si on clique sur "connexion"
if (isset($_POST['connexion']) && !empty(trim($_POST['prenom']))) {
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    // Cookie valable 1 heure
    setcookie($cookie_name, $prenom, time() + 3600);
    $_COOKIE[$cookie_name] = $prenom; // Pour l'utiliser immédiatement
}

// Si on clique sur "déconnexion"
if (isset($_POST['deco'])) {
    // Supprimer le cookie
    setcookie($cookie_name, "", time() - 3600);
    unset($_COOKIE[$cookie_name]);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion avec cookie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <?php if [!isset$_COOKIE[$cookie_name]_]()_
