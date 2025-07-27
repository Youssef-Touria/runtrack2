<?php
// Déclaration de la variable
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Chaîne vide pour le résultat
$result = "";

// Parcours de la chaîne à partir du deuxième caractère
for ($i = 1; isset($str[$i]); $i++) {
    $result .= $str[$i];
}

// Ajout du premier caractère à la fin
$result .= $str[0];

// Affichage du résultat
echo $result;
?>
