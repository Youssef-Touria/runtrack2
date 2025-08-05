<?php
// Connexion à la base
$mysqli = new mysqli("localhost", "root", "", "jour09");

// Vérifier connexion
if ($mysqli->connect_error) {
    die("Erreur de connexion : " . $mysqli->connect_error);
}

// Requête SQL : uniquement les étudiantes de sexe féminin
$sql = "SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'Femme'";
$result = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Étudiantes - Sexe Féminin</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Étudiantes - Sexe Féminin</h2>

<table>
    <thead>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Naissance</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo htmlspecialchars($row['prenom']); ?></td>
                <td><?php echo htmlspecialchars($row['nom']); ?></td>
                <td><?php echo htmlspecialchars($row['naissance']); ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

</body>
</html>
<?php
// Fermer la connexion
$mysqli->close();
?>
