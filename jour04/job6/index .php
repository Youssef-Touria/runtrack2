<form method="get">
    <label>Entrez un nombre : <input type="text" name="nombre" required></label>
    <input type="submit" value="Vérifier">
</form>

<?php
if (isset($_GET['nombre'])) {
    $valeur = $_GET['nombre'];

    if (is_numeric($valeur)) {
        if ($valeur % 2 == 0) {
            echo "Nombre pair";
        } else {
            echo "Nombre impair";
        }
    } else {
        echo "Veuillez entrer un nombre valide.";
    }
}
?>
 