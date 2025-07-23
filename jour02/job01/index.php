<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jour02 - Job01</title>
</head>
<body>

<form method="GET" action="">
    <label for="prenom">Entrez votre prénom :</label>
    <input type="text" name="prenom" id="prenom">
    <button type="submit">Valider</button>
</form>

<?php
// Vérifie si le champ 'prenom' existe
if (isset($_GET['prenom'])) {
    echo "<p>Bonjour " . htmlspecialchars($_GET['prenom']) . " !</p>";
}
?>

</body>
</html>