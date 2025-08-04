<?php
function occurrences($str, $char) {
    // Retourne le nombre d'occurrences de $char dans $str
    return substr_count($str, $char);
}

// Exemple d'utilisation
$str = "Bonjour";
$char = "o";
$resultat = occurrences($str, $char);

echo "Le caractère '$char' apparaît $resultat fois dans '$str'.";
?>
