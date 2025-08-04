<?php
function calcule($a, $operation, $b) {
    if ($operation == "+") {
        return $a + $b;
    } elseif ($operation == "-") {
        return $a - $b;
    } elseif ($operation == "*") {
        return $a * $b;
    } elseif ($operation == "/") {
        return $a / $b;
    } elseif ($operation == "%") {
        return $a % $b;
    } else {
        return "Opération invalide";
    }
}

// Exemple d'appel
echo calcule(8, "+", 3); // Affichera 11
echo calcule(8, "-", 3); // Affichera 5

echo calcule(8, "*", 3); // Affichera 24

echo calcule(8, "/", 2); // Affichera 4