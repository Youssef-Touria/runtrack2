<form method="get">
    <label>Prénom : <input type="text" name="prenom"></label><br>
    <label>Nom : <input type="text" name="nom"></label><br>
    <label>Email : <input type="text" name="email"></label><br>
    <input type="submit" value="Envoyer">
</form>

<?php
if (!empty($_GET)) {
    echo "<h2>Résultats envoyés :</h2>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";

    foreach ($_GET as $key => $value) {
        echo "<tr><td>" . htmlspecialchars($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
    }

    echo "</table>";
}
?>
