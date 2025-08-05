<?php
// Connexion à la base
$mysqli = new mysqli("localhost", "root", "", "jour09");

// Vérifier connexion
if ($mysqli->connect_error) {
    die("Erreur de connexion : " . $mysqli->connect_error);
}

// Requête SQL : uniquement Cyril, Jessica et Roxan
$sql = "SELECT prenom, nom, naissance, sexe, email 
        FROM etudiants 
        WHERE prenom IN ('Cyril', 'Jessica', 'Roxan')";
$result = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Liste des étudiants sélectionnés</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Liste des étudiants sélectionnés</h2>

<table>
    <thead>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Naissance</th>
            <th>Sexe</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo htmlspecialchars($row['prenom']); ?></td>
                <td><?php echo htmlspecialchars($row['nom']); ?></td>
                <td><?php echo htmlspecialchars($row['naissance']); ?></td>
                <td><?php echo htmlspecialchars($row['sexe']); ?></td>
                <td><?php echo htmlspecialchars($row['email']); ?></td>
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
