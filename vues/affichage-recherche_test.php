<table>
    <tr class="theader">
        <th>Utilisateur</th>
        <th>Date</th>
        <th>Tests réalisés</th>
        <th> </th>
    </tr>
    <?php 
    while ($donnees = $reponse->fetch())
    { 
    ?>
    <tr>
        <td><?php echo $donnees['utilisateur']?></td>
        <td>Session réalisée le </br> <?php echo $donnees['datesession']?></td>
        <td><?php echo $donnees['test']?></td>
        <td>
            <?php
               if ($_SERVER['REQUEST_URI']=="/APP-G5B-2020-2021/php/admin_recherche-tableau-resultat.php"){
            ?>
                <p><a href="admin_recherche-tableau-resultat-voir.php">Voir</a></p>
            <?php
               } else {
            ?>
                <p><a href="gestionnaire_recherche-tableau-resultat-voir.php">Voir</a></p>
            <?php }
            ?>   
        </td>
    </tr>
    <?php }
        $reponse->closeCursor();
        
    ?>
    <tr>
        <td>Arthur Latourrette</td>
        <td>Session réalisée le </br> 2020-10-27 à 15h32</td>
        <td>test son, test lumière, test fréquence</td>
        <td>
            <p><a href="gestionnaire_recherche-tableau-resultat-voir.php">Voir</a></p>
        </td>
    </tr>
    <tr>
        <td>Sanae El Messadi</td>
        <td>Session réalisée le </br> 2020-10-27 à 15h32</td>
        <td>test son, test lumière, test fréquence</td>
        <td>
            <p><a href="gestionnaire_recherche-tableau-resultat-voir.php">Voir</a></p>
        </td>
    </tr>
    <tr>
        <td>Thomas Le Deventec</td>
        <td>Session réalisée le </br> 2020-10-27 à 15h32</td>
        <td>test son, test lumière, test fréquence</td>
        <td>
            <p><a href="gestionnaire_recherche-tableau-resultat-voir.php">Voir</a></p>
        </td>
    </tr>
    <tr>
        <td>Guillaume Jolly</td>
        <td>Session réalisée le </br> 2020-10-27 à 15h32</td>
        <td>test son, test lumière, test fréquence</td>
        <td>
            <p><a href="gestionnaire_recherche-tableau-resultat-voir.php">Voir</a></p>
        </td>
    </tr>
    <tr>
        <td>Costantin Chevalier</td>
        <td>Session réalisée le </br> 2020-10-27 à 15h32</td>
        <td>test son, test lumière, test fréquence</td>
        <td>
            <p><a href="gestionnaire_recherche-tableau-resultat-voir.php">Voir</a></p>
        </td>
    </tr>

</table>