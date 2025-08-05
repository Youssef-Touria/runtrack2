<?php
// Connexion à la base
$mysqli = new mysqli("localhost", "root", "", "jour09");

// Vérifier connexion
if ($mysqli->connect_error) {
    die("Erreur de connexion : " . $mysqli->connect_error);
}

// Requête pour compter le nombre d'étudiants
$sql = "SELECT COUNT(*) AS nb_etudiants FROM etudiants";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Nombre total d'étudiants</title>
<style>
    body {
        font-family: Arial, sans-serif;
        padding: 20px;
    }
    table {
        border-collapse: collapse;
        margin: 0 auto;
        width: 40%;
    }
    thead th {
        background-color: #f4f4f4;
        font-weight: bold;
        border: 1px solid black;
        padding: 10px;
        text-align: center;
    }
    tbody td {
        border: 1px solid black;
        padding: 10px;
        text-align: center;
    }
    h2 {
        text-align: center;
    }
</style>
</head>
<body>

<h2>Nombre total d'étudiants</h2>

<table>
    <thead>
        <tr>
            <th>Nombre d'étudiants</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo htmlspecialchars($row['nb_etudiants']); ?></td>
        </tr>
    </tbody>
</table>

</body>
</html>
<?php
// Fermer la connexion
$mysqli->close();
?>
