<?php
// Connexion à la base de données
$mysqli = new mysqli("localhost", "root", "", "jour09");

// Vérifier la connexion
if ($mysqli->connect_error) {
    die("Erreur de connexion : " . $mysqli->connect_error);
}

// Récupérer uniquement les trois salles
$sql = "SELECT nom, capacite FROM salles WHERE nom IN ('Lounge', 'Studio Son', 'Broadcasting')";
$result = $mysqli->query($sql);

// Affichage du tableau HTML
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Nom</th><th>Capacité</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['nom']}</td><td>{$row['capacite']}</td></tr>";
}

echo "</table>";

// Fermer la connexion
$mysqli->close();
?>

