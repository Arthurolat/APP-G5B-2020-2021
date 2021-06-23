<p>
    <?php 
    while ($donnees = $reponse->fetch())
    { 
    ?>
    <h3 id="test-1"><?php echo $donnees['question']; ?></h3>
    <div class="div-test1"><p><?php echo $donnees['reponse']; ?></p></div><br>

    <?php }
        $reponse->closeCursor();
    ?>
    
</p>