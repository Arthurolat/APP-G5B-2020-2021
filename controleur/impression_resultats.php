 <?php
require("../modele/connexionbdd.php");
require("../modele/fonctions.php");

/* Récupération des valeurs des champs du formulaire */
$datesession= $_POST['datesession'];
$idacteur= $_POST['idacteur'];
$reponse= affichage_resultats($bdd,$datesession, $idacteur);
?>
<style type="text/css">


table { vertical-align: top; }
tr    { vertical-align: top; }
td    { vertical-align: top;  }

</style>
<page backcolor="#FEFEFE">
   
    <table cellspacing="0" style="width: 100%; text-align: center; font-size: 14px; border:solid 1px black">
        <tr>
            <td style="width: 25%; border:solid 1px black; ">
               
            </td>
           
            <td style="width: 50%; color: black; border-width:1px; border-style:solid">
            <h1 >COMPTE RENDU DES RESULTATS </h1>
            </td>
           
            <td style="width: 25%; color: black ;border:solid 1px black; padding-top:10px;" valign="middle" >
           <span style="font-size:13px; text-align:center; ">Imprimer le: <?php echo date('d-m-Y'); ?></span>
           </td>
        </tr>
    </table>
    <table style="width: 100%">
   <tr>
      <td><h2>Temps de réaction à un son innattendu</h2></td>
      <?php
                        $soninnatendu=0;
                        $table= array();
                        while ($donnees = $reponse->fetch()){
                            array_push($table, $donnees);
                            
                         } 
                         for ($i=0; $i < count($table) ; $i++) { 
                            if ($table[$i]['idcapteur']==1){
                                $soninnatendu=$table[$i]['valeur'];
                            }
                         }
                         
                            //print_r($table);
                        
                          ?>

      <td><?php echo $soninnatendu ?></td>  
   </tr>
   <tr>
      <td><h2>Temps de réaction à une lumière attendue dans le noir</h2></td>
      <td>ligne2 colonne2</td>
    </tr>
    <tr>
      <td>Temps de réaction à une lumière inattendue le jour </td>
      <td>ligne2 colonne4</td>
   </tr>
</table> 

    




<page_footer>
<table class="page_footer" align="center">
<tr>
<td style="width: 34%; text-align: center">
page [[page_cu]]/[[page_nb]]
</td>
<td style="width: 33%; text-align: right">
JetNavette.be &nbsp; - &nbsp; Copyright &copy; <?php echo Date('Y');?>
</td>
</tr>
</table>
</page_footer>

  <nobreak></nobreak>
</page>
