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

// Requête SQL : récupérer le nom des salles et le nom de leur étage
$sql = "SELECT salles.nom AS salle, etages.nom AS etage
        FROM salles
        INNER JOIN etages ON salles.id_etage = etages.id";

$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Noms des salles et de leur étage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Liste des salles et de leur étage</h2>

<table>
    <thead>
        <tr>
            <?php
            if ($result && $result->num_rows > 0) {
                $fields = $result->fetch_fields();
                foreach ($fields as $field) {
                    echo "<th>" . ucfirst($field->name) . "</th>";
                }
                echo "</tr></thead><tbody>";

                // Affichage des lignes
                $result->data_seek(0);
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    foreach ($row as $data) {
                        echo "<td>" . $data . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</tbody>";
            } else {
                echo "<th colspan='2'>Aucune donnée trouvée</th></tr></thead>";
            }
            ?>
</table>

</body>
</html>

<?php
$conn->close();
?>
