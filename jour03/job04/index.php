<?php
// Déclaration de la variable
$str = "Dans l'espace, personne ne vous entend crier";

// Initialisation du compteur
$nbCaracteres = 0;

// Parcours de la chaîne caractère par caractère
for ($i = 0; isset($str[$i]); $i++) {
    $nbCaracteres++;
}

// Affichage du résultat
echo "Le nombre de caractères dans la chaîne est : $nbCaracteres";
?>
