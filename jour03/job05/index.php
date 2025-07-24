<?php
// Chaîne de caractères
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

// Dictionnaire pour stocker le nombre de voyelles et de consonnes
$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];

// Définition des lettres voyelles
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

// Parcours de la chaîne
for ($i = 0; isset($str[$i]); $i++) {
    $char = $str[$i];
    
    // Vérifie si c'est une lettre
    if (ctype_alpha($char)) {
        if (in_array($char, $voyelles)) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}

// Affichage du tableau HTML
echo "<table border='1'>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{$dic['voyelles']}</td>
                <td>{$dic['consonnes']}</td>
            </tr>
        </tbody>
      </table>";
?>
