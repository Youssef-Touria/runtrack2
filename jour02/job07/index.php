<?php
<?php
// Hauteur du triangle
$hauteur = 5;

// Affiche le triangle avec des *
for ($i = 1; $i <= $hauteur; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br />";
}
?>