<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Affichage trame</title>
        <link rel="stylesheet" href="affichageTrame.css"> 
        
        
    </head>
    
    
    <body>
            <h1>Afficher les trames</h1>
            </br>

            <h3>Communication ascendante : </h3>
            <form action="" method="post">
                DATE : <input type="date" name="date" />
                CAPTEUR : <select name="capteur" >
                            <option value="">--Choisir un capteur--</option>
                            <option value="1">capteur 1</option>
                            <option value="2">capteur 2</option>
                            <option value="3">capteur 3</option>
                            <option value="4">capteur 4</option>
                            <option value="5">capteur 5</option>
                            <option value="6">capteur 5</option>
                        </select>
                <input type="submit" name="bouton" value="Visualiser" />
            </form>
            </br>
      
        <h3>Communication descendante :</h3>
        <div class="led">
            <input type=button onclick=window.location.href='http://projets-tomcat.isep.fr:8080/appService/?ACTION=COMMAND&TEAM=G5B-&TRAME=1G5B-25010001000083'; value="LED Rouge" />
            <input type=button onclick=window.location.href='http://projets-tomcat.isep.fr:8080/appService/?ACTION=COMMAND&TEAM=G5B-&TRAME=1G5B-25010002000083'; value="LED Verte" />
            <input type=button onclick=window.location.href='http://projets-tomcat.isep.fr:8080/appService/?ACTION=COMMAND&TEAM=G5B-&TRAME=1G5B-25010004000083'; value="LED Bleue" />
            <input type=button onclick=window.location.href='http://projets-tomcat.isep.fr:8080/appService/?ACTION=COMMAND&TEAM=G5B-&TRAME=1G5B-25010000000083'; value="Eteindre LED" />
            <!-- 
            <a href="http://projets-tomcat.isep.fr:8080/appService/?ACTION=COMMAND&TEAM=G5B-&TRAME=1G5B-25010001000083
" class="button">LED Rouge</a>
        </div>
        <div class="led">
            <a href="http://projets-tomcat.isep.fr:8080/appService/?ACTION=COMMAND&TEAM=G5B-&TRAME=1G5B-25010002000083
" class="button">LED Verte</a>
        </div>
        <div class="led"> 
            <a href="http://projets-tomcat.isep.fr:8080/appService/?ACTION=COMMAND&TEAM=G5B-&TRAME=1G5B-25010004000083
" class="button">LED Bleue</a>
        </div>
        <div class="led">
            <a href="http://projets-tomcat.isep.fr:8080/appService/?ACTION=COMMAND&TEAM=G5B-&TRAME=1G5B-25010000000083
" class="button">Eteindre LED</a>
            -->
        </div>


        </br>
        <h3>Résultats :</h3>
        <div>
            <?php
                require("../modele/connexionbdd.php");
                $ch = curl_init();
                curl_setopt(
                    $ch,
                    CURLOPT_URL,
                    "http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=9999");
                curl_setopt($ch, CURLOPT_HEADER, FALSE);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                $data = file_get_contents('http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=G5B-');
                curl_close($ch);

                //echo "Raw Data:<br />";
                $data_tab = str_split($data,33);

                //echo "Tabular Data:<br />";
                 
                $current_time=date('Y-m-d H:i:s');
                //echo "$current_time";
                    
                for($i=0, $size=count($data_tab); $i<$size-1; $i++){
                    //echo "Trame $i: $data_tab[$i]<br />";
                    $trame = $data_tab[$i];
                    // décodage avec des substring
                    $t = substr($trame,0,1);
                    $o = substr($trame,1,4);
                    $r =substr($trame,4,5);
                    $c = substr($trame,5,6);
                    $n= substr($trame,6,8);
                    $v= substr($trame,8,12);
                    $a= substr($trame,12,16);
                    $x= substr($trame,16,18);
                    $year= substr($trame,18,22);
                    $month= substr($trame,22,24);
                    $day= substr($trame,24,26);
                    $hour= substr($trame,26,28);
                    $min= substr($trame,28,30);
                    $sec= substr($trame,30,32);

                    // décodage avec sscanf
                    list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =
                    sscanf($trame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
                    //echo("<br />$t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec<br /><br />");
                    
                    
                    //barre de recherche des resultats
                    if($_POST['bouton']){
                        if($_POST['date']=="$year-$month-$day" && $_POST['capteur']=="3"){
                            echo ("Date du test : $year/$month/$day <br />");
                            echo ("Heure du test : $hour:$min:$sec <br />");
                            if($c==3){
                                echo "Mesure :".($v)." °C <br /><br />";
                            }else{
                                echo "Mesure :".($v)."<br /><br />";
                            }
                        }
                        if($_POST['date']==null){
                            echo ("Date du test : $year/$month/$day <br />");
                            echo ("Heure du test : $hour:$min:$sec <br />");
                            if($c==3){
                                echo "Mesure :".($v)." °C <br /><br />";
                            }else{
                                echo "Mesure :".($v)."<br /><br />";
                            }
                        } 
                    }


                    //inserer dans la bdd 
                    //inserer les donnees non enregistrees
                    /*$bdd->exec(INSERT INTO mesure(datemesure, valeur, idcapteur) SELECT ('$year-$month-$day $hour:$min:$sec', '$v', '2') Where not exists(select * from personne where datemesure='$year-$month-$day $hour:$min:$sec' and idcapteur='$c')); 
                    */
                    
                    if($current_time<'$year-$month-$day $hour:$min:$sec'){
                        $bdd->exec(INSERT INTO mesure(datemesure, valeur, idcapteur) SELECT ('$year-$month-$day $hour:$min:$sec', '$v', '2') Where not exists(select * from personne where datemesure='$year-$month-$day $hour:$min:$sec' and idcapteur='$c')); 
                    }

                }

                //echo "Trame :".$data_tab[count($data_tab)-2]."<br />" ;           // size $data_tab 
                
            
            ?>
        </div>
        
        
        

    </body>
</html>


