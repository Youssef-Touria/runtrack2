<?php
// Connexion à la base
$mysqli = new mysqli("localhost", "root", "", "jour09");

// Vérifier connexion
if ($mysqli->connect_error) {
    die("Erreur de connexion : " . $mysqli->connect_error);
}

// Requête : étudiants ayant moins de 18 ans
$sql = "SELECT prenom, nom, naissance, sexe, email 
        FROM etudiants 
        WHERE TIMESTAMPDIFF(YEAR, naissance, CURDATE()) < 18";
$result = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Étudiants de moins de 18 ans</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Étudiants de moins de 18 ans</h2>

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
        <?php 
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['prenom']); ?></td>
                    <td><?php echo htmlspecialchars($row['nom']); ?></td>
                    <td><?php echo htmlspecialchars($row['naissance']); ?></td>
                    <td><?php echo htmlspecialchars($row['sexe']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                </tr>
        <?php 
            }
        } else {
            echo "<tr><td colspan='5'>Aucun étudiant trouvé</td></tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
<?php
// Fermer la connexion
$mysqli->close();
?>
