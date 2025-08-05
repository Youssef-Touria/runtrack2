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

// Requête SQL : récupérer toutes les infos des salles triées par capacité décroissante
$sql = "SELECT * FROM salles ORDER BY capacite DESC";
$result = $conn->query($sql);

// Début du tableau HTML
echo "<table border='1' cellpadding='5' cellspacing='0'>";

// Affichage de l'en-tête avec les noms des colonnes
if ($result && $result->num_rows > 0) {
    $fields = $result->fetch_fields();
    echo "<thead><tr>";
    foreach ($fields as $field) {
        echo "<th>" . $field->name . "</th>";
    }
    
    echo "</tr></thead><tbody>";

    // Affichage des lignes
    $result->data_seek(0); // repositionner le curseur au début
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $data) {
            echo "<td>" . $data . "</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
} else {
    echo "<tr><td>Aucune donnée trouvée</td></tr>";
}

echo "</table>";

// Fermer la connexion
$conn->close();
?>
