<?php
function leetSpeak($str) {
    // Tableau de correspondance entre lettres et chiffres
    $leet = [
        'A' => '4', 'a' => '4',
        'B' => '8', 'b' => '8',
        'E' => '3', 'e' => '3',
        'G' => '6', 'g' => '6',
        'L' => '1', 'l' => '1',
        'S' => '5', 's' => '5',
        'T' => '7', 't' => '7'
    ];

    // Remplacer chaque lettre par son équivalent leet
    return strtr($str, $leet);
}

// Exemple d'utilisation
$texte = "Salut les amis, Bonjour Tout Le Monde!";
echo leetSpeak($texte);
?>

