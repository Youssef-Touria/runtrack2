<form method="post">
    <label>Prénom : <input type="text" name="prenom"></label><br>
    <label>Nom : <input type="text" name="nom"></label><br>
    <label>Email : <input type="text" name="email"></label><br>
    <input type="submit" value="Envoyer">
</form>

<?php
if (!empty($_POST)) {
    echo "<h2>Données envoyées :</h2>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";

    foreach ($_POST as $cle => $valeur) {
        echo "<tr><td>" . htmlspecialchars($cle) . "</td><td>" . htmlspecialchars($valeur) . "</td></tr>";
    }

    echo "</table>";
}
?>
