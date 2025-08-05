<?php
$mysqli = new mysqli("localhost", "root", "", "jour09");

if ($mysqli->connect_error) {
    die("Erreur de connexion : " . $mysqli->connect_error);
}

$sql = "SELECT nom, capacite FROM salles WHERE nom IN ('Lounge', 'Studio Son', 'Broadcasting')";
$result = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Liste des salles</title>
<link rel="stylesheet" href="style.css"> <!-- Lien vers le CSS -->
</head>
<body>

<h2 style="text-align:center;">Nom et capacité des salles</h2>

<table>
    <tr>
        <th>Nom</th>
        <th>Capacité</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo htmlspecialchars($row['nom']); ?></td>
            <td><?php echo htmlspecialchars($row['capacite']); ?></td>
        </tr>
    <?php } ?>
</table>


</body>
</html>
<?php
$mysqli->close();
?>
