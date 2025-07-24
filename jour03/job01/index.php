<?php
// Création du tableau avec les nombres donnés
$numbers = [200, 204, 173, 98, 171, 404, 459];

// Parcours du tableau
foreach ($numbers as $number) {
    // Vérifie si le nombre est pair ou impair
    if ($number % 2 == 0) {
        echo "$number est paire<br />";
    } else {
        echo "$number est impaire<br />";
    }
}
?>
