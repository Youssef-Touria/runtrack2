<?php
// Informations de connexion à la base de données
$serveur = "localhost";     // Hôte
$utilisateur = "root";      // Nom d’utilisateur MySQL
$motdepasse = "";           // Mot de passe MySQL
$base = "jour09";           // Nom de la base

// Connexion à MySQL
$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $base);

// Vérifier si la connexion fonctionne
if ($connexion->connect_error) {
    die("Échec de connexion : " . $connexion->connect_error);
}

// Requête SQL pour récupérer toutes les colonnes de la table étudiants
$sql = "SELECT prenom, nom, naissance, sexe, email FROM etudiants";
$resultat = $connexion->query($sql);

// Début du tableau HTML
echo "<table border='1' cellspacing='0' cellpadding='5'>";
echo "<thead>";
echo "<tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Naissance</th>
        <th>Sexe</th>
        <th>Email</th>
      </tr>";
echo "</thead>";
echo "<tbody>";

// Si on a des résultats, on affiche chaque ligne
if ($resultat->num_rows > 0) {
    while ($ligne = $resultat->fetch_assoc()) {
        echo "<tr>
                <td>" . $ligne["prenom"] . "</td>
                <td>" . $ligne["nom"] . "</td>
                <td>" . $ligne["naissance"] . "</td>
                <td>" . $ligne["sexe"] . "</td>
                <td>" . $ligne["email"] . "</td>
              </tr>";
    }
} else {
    // Si aucun résultat trouvé
    echo "<tr><td colspan='5'>Aucune donnée trouvée</td></tr>";
}

echo "</tbody>";
echo "</table>";

// Fermer la connexion
$connexion->close();
?>
