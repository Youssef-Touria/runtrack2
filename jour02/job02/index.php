<?php
<?php
// Affiche tous les nombres de 0 à 1337 sauf 26, 37, 88, 1111 et 3233 avec un retour à la ligne
for ($i = 0; $i <= 1337; $i++) {
    // On exclut les nombres 26, 37, 88, 1111 et 3233
    if ($i == 26 || $i == 37 || $i == 88 || $i == 1111 || $i == 3233) {
        continue;
    }
    echo $i . "<br />";