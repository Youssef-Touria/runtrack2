<form method="post">
    <label>Nom : <input type="text" name="nom"></label><br>
    <label>Prénom : <input type="text" name="prenom"></label><br>
    <label>Email : <input type="text" name="email"></label><br>
    <input type="submit" value="Envoyer">
</form>

<?php
if (!empty($_POST)) {
    $nombreArguments = count($_POST);
    echo "Le nombre d'arguments POST envoyés est : " . $nombreArguments;
}
?>
