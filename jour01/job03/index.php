<?php

// Déclaration des variables de types primitifs
$bool = true;
$int = 42;
$string = "Hello LaPlateforme!";
$float = 3.14;

// Fonction pour générer une ligne du tableau
function afficherLigne($nom, $valeur) {
    echo "<tr>";
    echo "<td>" . gettype($valeur) . "</td>";
    echo "<td>" . $nom . "</td>";
    echo "<td>" . var_export($valeur, true) . "</td>";
    echo "</tr>";
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Variables PHP</title>
    <style>
        table { border-collapse: collapse; width: 60%; margin: 30px auto; }
        th, td { border: 1px solid #444; padding: 10px; text-align: center; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

<h2 style="text-align:center;">Tableau des variables en PHP</h2>

<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <?php
            afficherLigne('bool', $bool);
            afficherLigne('int', $int);
            afficherLigne('string', $string);
            afficherLigne('float', $float);
        ?>
    </tbody>
</table>

</body>
</html>
