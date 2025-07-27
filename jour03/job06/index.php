<?php
// Déclaration de la variable
$str = "Les choses que l'on possède finissent par nous posséder.";

// Chaîne vide pour stocker l'inverse
$reverse = "";

// Parcours de la chaîne à l’envers
for ($i = strlen($str) - 1; isset($str[$i]); $i--) {
    $reverse .= $str[$i];
}

// Affichage du résultat
echo $reverse;
?>
