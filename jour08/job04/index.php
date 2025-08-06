<?php
// Nom du cookie
$cookie_name = "prenom";

// Si on clique sur "connexion"
if (isset($_POST['connexion']) && !empty(trim($_POST['prenom']))) {
    $prenom = htmlspecialchars(trim($_POST['prenom']));

    // Création du cookie (valable 1h)
    setcookie($cookie_name, $prenom, time() + 3600, "/");

    // Permet d'utiliser immédiatement la valeur sans recharger
    $_COOKIE[$cookie_name] = $prenom;
}

// Si on clique sur "déconnexion"
if (isset($_POST['deco'])) {
    // Suppression du cookie
    setcookie($cookie_name, "", time() - 3600, "/");
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
    <?php if (!isset($_COOKIE[$cookie_name])): ?>
        <!-- Formulaire de connexion -->
        <h2>Connexion</h2>
        <form method="post">
            <input type="text" name="prenom" placeholder="Entrez votre prénom">
            <button type="submit" name="connexion" class="btn-primary">Connexion</button>
        </form>
    <?php else: ?>
        <!-- Message de bienvenue -->
        <h2>Bonjour <?= htmlspecialchars($_COOKIE[$cookie_name]) ?> !</h2>
        <form method="post">
            <button type="submit" name="deco" class="btn-reset">Déconnexion</button>
        </form>
    <?php endif; ?>
</div>
</body>
</html>
