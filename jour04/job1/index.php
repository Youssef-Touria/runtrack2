<form method="get">
    <label>Nom : <input type="text" name="nom" /></label><br />
    <label>Prénom : <input type="text" name="prenom" /></label><br />
    <label>Email : <input type="text" name="email" /></label><br />
    <input type="submit" value="Envoyer" />
</form>

<?php
$nombreArguments = count($_GET);
echo "Le nombre d'arguments GET envoyés est : " . $nombreArguments;
?>
