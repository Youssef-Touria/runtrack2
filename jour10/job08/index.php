<?php
// Connexion à la base de données
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "jour09";

// Connexion MySQLi
$conn = new mysqli($host, $user, $pass, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Requête SQL pour calculer la somme des capacités
$sql = "SELECT SUM(capacite) AS capacite_totale FROM salles";
$result = $conn->query($sql);

// Début du tableau HTML
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<thead><tr><th>capacite_totale</th></tr></thead>";
echo "<tbody>";

// Affichage des données
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['capacite_totale'] . "</td></tr>";
    }
} else {
    echo "<tr><td>Aucune donnée trouvée</td></tr>";
}

echo "</tbody></table>";

// Fermer la connexion
$conn->close();
?>
