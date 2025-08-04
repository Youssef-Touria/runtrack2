<?php
// Fonction qui met en gras les mots commençant par une majuscule
function gras($str) {
    $mots = explode(" ", $str); // Découpe en mots
    foreach ($mots as &$mot) {
        if (preg_match('/^[A-Z]/', $mot)) { // Si le mot commence par une majuscule
            $mot = "<b>$mot</b>";
        }
    }
    return implode(" ", $mots); // Recompose la phrase
}

// Fonction César : décale chaque lettre d'un certain nombre
function cesar($str, $decalage = 2) {
    $result = "";
    $decalage = $decalage % 26; // Pour éviter les dépassements
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (ctype_alpha($char)) { // Seulement lettres
            $code = ord($char);
            if (ctype_upper($char)) {
                $char = chr((($code - 65 + $decalage) % 26) + 65);
            } else {
                $char = chr((($code - 97 + $decalage) % 26) + 97);
            }
        }
        $result .= $char;
    }
    return $result;
}

// Fonction plateforme : ajoute "_" aux mots finissant par "me"
function plateforme($str) {
    $mots = explode(" ", $str);
    foreach ($mots as &$mot) {
        if (substr($mot, -2) === "me") {
            $mot .= "_";
        }
    }
    return implode(" ", $mots);
}

// Traitement du formulaire
$resultat = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $str = $_POST["str"] ?? "";
    $fonction = $_POST["fonction"] ?? "";

    if ($fonction === "gras") {
        $resultat = gras($str);
    } elseif ($fonction === "cesar") {
        $resultat = cesar($str);
    } elseif ($fonction === "plateforme") {
        $resultat = plateforme($str);
    }
}
?>

<!-- Formulaire HTML -->
<form method="POST">
    <input type="text" name="str" placeholder="Tapez votre texte" required>

    <select name="fonction" required>
        <option value="gras">Gras</option>
        <option value="cesar">César</option>
        <option value="plateforme">Plateforme</option>
    </select>

    <button type="submit">Valider</button>
</form>

<!-- Affichage du résultat -->
<?php if (!empty($resultat)) : ?>
    <p><strong>Résultat :</strong> <?= $resultat ?></p>
<?php endif; ?>



