<?php
session_start();

// Initialiser la grille
if (!isset($_SESSION['grille'])) {
    $_SESSION['grille'] = array_fill(0, 9, '-');
    $_SESSION['joueur'] = 'X'; // X commence
}

// Fonction pour vérifier le gagnant
function verifierGagnant($grille) {
    $lignes = [
        [0,1,2], [3,4,5], [6,7,8], // lignes
        [0,3,6], [1,4,7], [2,5,8], // colonnes
        [0,4,8], [2,4,6]           // diagonales
    ];
    foreach ($lignes as $ligne) {
        if ($grille[$ligne[0]] !== '-' &&
            $grille[$ligne[0]] === $grille[$ligne[1]] &&
            $grille[$ligne[1]] === $grille[$ligne[2]]) {
            return $grille[$ligne[0]];
        }
    }
    return null;
}

// Jouer un coup
if (isset($_POST['case'])) {
    $index = intval($_POST['case']);
    if ($_SESSION['grille'][$index] === '-') {
        $_SESSION['grille'][$index] = $_SESSION['joueur'];
        $_SESSION['joueur'] = ($_SESSION['joueur'] === 'X') ? 'O' : 'X';
    }
}

// Réinitialiser la partie
if (isset($_POST['reset'])) {
    $_SESSION['grille'] = array_fill(0, 9, '-');
    $_SESSION['joueur'] = 'X';
}

// Vérifier si quelqu’un a gagné
$gagnant = verifierGagnant($_SESSION['grille']);
$matchNul = !in_array('-', $_SESSION['grille']);

// Si partie finie → message + reset automatique après affichage
if ($gagnant || $matchNul) {
    $message = $gagnant ? "$gagnant a gagné !" : "Match nul !";
    $_SESSION['grille'] = array_fill(0, 9, '-');
    $_SESSION['joueur'] = 'X';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Morpion PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Jeu du Morpion</h1>

    <?php if (!empty($message)) : ?>
        <p class="message"><?= $message ?></p>
    <?php endif; ?>

    <form method="post" class="grille">
        <?php foreach ($_SESSION['grille'] as $i => $val) : ?>
            <button type="submit" name="case" value="<?= $i ?>" <?= ($val !== '-') ? 'disabled' : '' ?>>
                <?= $val ?>
            </button>
            <?php if (($i + 1) % 3 == 0) echo "<br>"; ?>
        <?php endforeach; ?>
    </form>

    <form method="post">
        <button type="submit" name="reset" class="btn-reset">Réinitialiser la partie</button>
    </form>
</div>
</body>
</html>
