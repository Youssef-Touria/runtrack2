<?php

// Connexion à la base de données
$mysqli = new mysqli("localhost", "root", "", "jour09");

// Vérifier la connexion
if ($mysqli->connect_error) {
    die("Erreur de connexion : " . $mysqli->connect_error);
}

// Requête SQL pour récupérer la superficie totale des étages
$sql = "SELECT SUM(superficie) AS superficie_totale FROM etages";
$result = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Superficie totale des étages</title>
</head>
<body>
    <h2>Superficie totale des étages</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>superficie_totale</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . htmlspecialchars($row['superficie_totale']) . "</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
<?php
// Fermer la connexion
$mysqli->close();
?>