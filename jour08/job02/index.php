<?php
// Nom du cookie
$cookie_name = "nbvisites";

// Si le bouton reset est cliqué → remettre le cookie à zéro
if (isset($_POST['reset'])) {
    setcookie($cookie_name, 0, time() + 3600); // expire dans 1 heure
    $_COOKIE[$cookie_name] = 0;
}

// Si le cookie existe → incrémenter
if (isset($_COOKIE[$cookie_name])) {
    $visites = $_COOKIE[$cookie_name] + 1;
} else {
    // Première visite
    $visites = 1;
}

// Mettre à jour le cookie
setcookie($cookie_name, $visites, time() + 3600); // expire dans 1 heure
$_COOKIE[$cookie_name] = $visites;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur avec Cookie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>📊 Compteur avec Cookie</h1>
        <p class="counter">Nombre de visites : <strong><?= $_COOKIE[$cookie_name] ?></strong></p>
        <form method="post">
            <button type="submit" name="reset" class="btn-reset">🔄 Réinitialiser</button>
        </form>
    </div>
</body>
</html>
