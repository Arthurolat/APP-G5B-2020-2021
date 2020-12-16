<?php

$bdd = new PDO('mysql:host=mysql-appg5b.alwaysdata.net;dbname=appg5b_bdd;charset=utf8', 'appg5b', '@ppg5b2020');

$reponse = $bdd->query("SELECT CONCAT(p.prenom, ' ', p.nom) as utilisateur 
                        FROM personne p");

while ($donnees = $reponse->fetch())
{ 
    echo $donnees['utilisateur'].'</br>';
}
?>



<!-- 
requete SQL: 

------resultat tableau recherche (admin/gestionnaire)------------

SELECT CONCAT(p.prenom, ' ', p.nom) as utilisateur , datesession, GROUP_CONCAT(distinct t.nom SEPARATOR ', ') as test
FROM sessiontest s, resultat r, testgenerique t, personne p
WHERE s.idsession=r.idsession AND r.idtest=t.idtest AND p.idacteur=s.idacteur 
AND (datesession BETWEEN '2020-12-01 00:00:00' AND '2020-12-02 00:00:00')
GROUP BY datesession
HAVING test LIKE '%fréquence%'

HAVING utilisateur LIKE '%....%'
HAVING (test LIKE '%fréquence%') AND (utilisateur LIKE '%....%')
HAVING (test LIKE '%fréquence%') OR (utilisateur LIKE '%....%')



------resultat tableau consulter mes résultats (utilisateur)------------

SELECT datesession, GROUP_CONCAT(distinct t.nom SEPARATOR ', ') as test
FROM sessiontest s, resultat r, testgenerique t
WHERE s.idsession=r.idsession AND r.idtest=t.idtest 
GROUP BY datesession




-------résultat tableau réglage utilisateur (admin) ------------------

SELECT CONCAT(prenom, ' ', nom) as utilisateur 
FROM personne



------- fonction lancer une session de tests (admin/gestionnaire)-----------

SELECT idboitier  
FROM boitier
-->