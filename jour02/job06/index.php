<?php
<?php
// Dimensions du rectangle
$largeur = 20;
$hauteur = 10;

// Affiche le rectangle avec des *
for ($h = 0; $h < $hauteur; $h++) {
    for ($l = 0; $l < $largeur; $l++) {
        echo "*";
    }
    echo"<br />";
}
?>