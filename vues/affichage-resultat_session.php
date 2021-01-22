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
        <td><?php echo $donnees['heure']?></td>
        <td><?php echo $donnees['test']?></td>
        <td><?php echo $donnees['valeur']?></td>
        <td><?php echo $donnees['unite']?></td>
    </tr>
    <?php } 
        $reponse->closeCursor();
    ?>
</table>
