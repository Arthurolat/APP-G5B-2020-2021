<?php
function affichage_résultats($bdd, $session )
$reponse = $bdd->query("SELECT distinct datesession, t.nom as test, valeur
FROM sessiontest s, resultat r, testgenerique t, personne p, mesure m
WHERE s.idsession=r.idsession AND r.idtest=t.idtest AND p.idacteur=s.idacteur AND m.idmesure=r.idmesure AND mail=session(mail)