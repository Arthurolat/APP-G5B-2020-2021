<table>
    <tr class="theader">
        <th>Heure</th>
        <th>Test</th>
        <th>Valeur</th>
        <th>Unité de mesure</th>
    </tr>

    <?php
    while ($donnees = $reponse->fetch())
    { 
    ?>
    <tr>
        <td><?php echo $donnees['utilisateur']?></td>
        <td>Session réalisée le </br> <?php echo $donnees['datesession']?></td>
        <td><?php echo $donnees['test']?></td>