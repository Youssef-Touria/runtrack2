<?php
// Hauteur du triangle
$hauteur = 5;

for ($i = 1; $i <= $hauteur; $i++) {
    // Espaces pour centrer
    for ($j = 1; $j <= $hauteur - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }

    // Première ligne (pointe)
    if ($i == 1) {
        echo "^";
    }
    // Dernière ligne (base)
    elseif ($i == $hauteur) {
        echo "/";
        for ($k = 1; $k <= ($i - 1) * 2 - 1; $k++) {
            echo "-";
        }
        echo "\\";
    }
    // Lignes intermédiaires (côtés en tirets)
    else {
        echo "/";
        for ($k = 1; $k <= ($i - 1) * 2 - 1; $k++) {
            echo "&nbsp;&nbsp;";
        }
        echo "\\";
    }

    echo "<br>";
}
?>