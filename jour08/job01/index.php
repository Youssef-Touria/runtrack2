<?php
// Démarrer la session
session_start();

// Initialiser le compteur si inexistant
if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
}

// Réinitialiser si bouton cliqué
if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}

// Incrémenter le compteur
$_SESSION['nbvisites']++;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de visites</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>👋 Bienvenue</h1>
        <p class="counter">Nombre de visites : <strong><?= $_SESSION['nbvisites'] ?></strong></p>
        <form method="post">
            <button type="submit" name="reset" class="btn-reset">🔄 Réinitialiser</button>
        </form>
    </div>
</body>
</html>
