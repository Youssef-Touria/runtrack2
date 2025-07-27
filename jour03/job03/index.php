<?php
// Déclaration de la variable
$str = "I'm sorry Dave I'm afraid I can't do that";

// Liste des voyelles à prendre en compte
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

// Parcours de la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    if (in_array($str[$i], $voyelles)) {
        echo $str[$i];
    }
}
?>
