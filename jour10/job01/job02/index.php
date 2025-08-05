<?php
// 1. Connexion à la base de données
$mysqli = new mysqli("localhost", "root", "", "jour09");

// Vérification de la connexion
if ($mysqli->connect_error) {
    die("Échec de la connexion : " . $mysqli->connect_error);
}

// 2. Requête SQL
$sql = "SELECT nom, capacite FROM salles";
$result = $mysqli->query($sql);

// 3. Affichage du tableau HTML
if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<thead>";
    echo "<tr><th>Nom</th><th>Capacité</th></tr>";
    echo "</thead>";
    echo "<tbody>";
    
    // 4. Parcours des résultats
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nom"] . "</td>";
        echo "<td>" . $row["capacite"] . "</td>";
        echo "</tr>";
    }
    
    echo "</tbody>";
    echo "</table>";
} else {
    echo "Aucune donnée trouvée.";
}

// Fermeture de la connexion
$mysqli->close();
?>
