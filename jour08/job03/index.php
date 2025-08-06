<?php
// Démarrer la session
session_start();

// Initialiser la liste si elle n'existe pas
if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

// Si bouton reset → vider la liste
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}

// Si formulaire envoyé avec un prénom
if (isset($_POST['prenom']) && !empty(trim($_POST['prenom']))) {
    $prenom = htmlspecialchars(trim($_POST['prenom'])); // Sécuriser
    $_SESSION['prenoms'][] = $prenom; // Ajouter à la liste
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des prénoms</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Ajouter un prénom</h2>

        <!-- Formulaire d'ajout -->
        <form method="post" class="form-inline">
            <input type="text" name="prenom" placeholder="Entrez un prénom">
            <button type="submit" class="btn-primary">Envoyer</button>
        </form>

        <!-- Bouton de réinitialisation -->
        <form method="post">
            <button type="submit" name="reset" class="btn-reset">Reset</button>
        </form>

        <!-- Affichage de la liste -->
        <?php if (!empty($_SESSION['prenoms'])): ?>
            <ul>
                <?php foreach ($_SESSION['prenoms'] as $p): ?>
                    <li><?= htmlspecialchars($p) ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p><em>Aucun prénom enregistré.</em></p>
        <?php endif; ?>
    </div>
</html>
