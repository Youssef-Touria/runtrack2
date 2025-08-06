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

// Requête SQL avec le bon nom de colonne
$sql = "SELECT prenom, nom, naissance 
        FROM etudiants 
        WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31'";

$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Étudiants (1998 - 2018)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Liste des étudiants nés entre 1998 et 2018</h2>

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

                // Parcours des résultats
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
                echo "<th colspan='3'>Aucune donnée trouvée</th></tr></thead>";
            }
            ?>
</table>

</body>
</html>

<?php
$conn->close();
?>
