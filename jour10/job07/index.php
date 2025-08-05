<?php
// Connexion à la base de données
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "jour09";

$conn = new mysqli($host, $user, $pass, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Requête SQL pour calculer la superficie totale
$sql = "SELECT SUM(superficie) AS superficie_totale FROM etage";
$result = $conn->query($sql);

// Affichage en tableau HTML
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>superficie_totale</th></tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['superficie_totale'] . "</td></tr>";
    }
} else {
    echo "<tr><td>Aucune donnée trouvée</td></tr>";
}

echo "</table>";

// Fermer la connexion
$conn->close();
?>
