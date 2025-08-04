<?php
function bonjour($jour) {
    if ($jour === true) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// Exemple d'appel
bonjour(true);  // Affichera : Bonjour
echo "<br>";
bonjour(false); // Affichera : Bonsoir
?>


