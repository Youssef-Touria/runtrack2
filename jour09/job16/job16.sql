SELECT etage.nom AS etage, 
       salles.nom AS 'Biggest Room', 
       salles.capacite
FROM salles
INNER JOIN etage ON salles.id_etage = etage.id
ORDER BY salles.capacite DESC
LIMIT 1;
