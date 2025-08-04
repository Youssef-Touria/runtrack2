<?php
// Vérifier si un style est choisi
$style = isset($_POST['style']) ? $_POST['style'] : 'style1';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire avec styles dynamiques</title>
    <!-- Charger le style choisi -->
    <link rel="stylesheet" href="<?php echo $style; ?>.css">
</head>
<body>

<form action="" method="post">
    <label for="style">Choisis un style :</label>
    <select name="style" id="style">
        <option value="style1" <?php if($style == 'style1') echo 'selected'; ?>>Style 1</option>
        <option value="style2" <?php if($style == 'style2') echo 'selected'; ?>>Style 2</option>
        <option value="style3" <?php if($style == 'style3') echo 'selected'; ?>>Style 3</option>
    </select>
    <button type="submit">Appliquer</button>
</form>

</body>
</html>
