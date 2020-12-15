<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/uti-accueil_mes_tests.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <title>Page résutat des tests utilisateur</title>

</head>

<body>
    
    <?php include("header.php"); ?>

    <section>

        <div id=menuGauche>
            <ul id=barre_nav>
                <li id="ongletdebut">
                    <a href=#><img class="img-responsive" src="../images/icones/icone_profil.png" alt="icone messagerie" width=10px> Mon profil</a>
                </li>
                <li>
                    <a href=#><img class="img-responsive" src="../images/icones/icone_messagerie.png" alt="icone messagerie" width=10px> Messagerie</a>
                </li>
                <li>
                    <a href="uti-accueil_resultat_date.php"><img class="img-responsive" src="../images/icones/icon-survey.png" alt="icone resultats" width=10px> Consulter mes résultats</a>
                </li>
                <li>
                    <a class="active" href=#><img class="img-responsive" src="../images/icones/icone_folder.png" alt="icone report" width=10px> Analyse de mes tests</a>
                    <ul>
                        <li><a href="uti-accueil_mes_tests.html#test-1">1. Temps de réaction à un son</a></li>
                        <li><a href="uti-accueil_mes_tests.html#test-2">2. Temps de réaction à une lumière</a></li>
                        <li><a href="uti-accueil_mes_tests.html#test-3">3. Fréquence cardiaque</a></li>
                        <li><a href="uti-accueil_mes_tests.html#test-4">4. Température de la peau</a></li>
                        <li id="ongletfin"><a href="uti-accueil_mes_tests.html#test-5">5. Reconnaissance de tonalité</a></li>
                    </ul>
                </li>

            </ul>

        </div>


        <div id=contenu>
            <h2> COMPTE RENDU DES TESTS</h2>
            <p>
                <h3 id="test-1">Temps de réaction à un son</h3>
                <div class="div-test-son">
                    <h4 id="son attendu"> Temps de réaction à un son attendu</h4>
                    <div class="div-son-attendu">
                        <p> Début du son: 15:45:32.12</p>
                        <p> Départ du militaire:15:45.59</p>
                    </div>
                    <h4 id="son inattendu"> Temps de réaction à un son inattendu</h4>
                    <div class="div-son-inattendu">
                        <p> Début du son: 15:45:32.20</p>
                        <p> Départ du militaire:15:45.99</p>
                    </div>

                </div>

                <h3 id="test-2">Temps de réaction à une lumière</h3>
                <div class="div-test-lumière">
                    <h4 id=" lumière attendue"> Temps de réaction à une lumière attendue</h4>
                    <div class="div-lumière-attendue">
                        <h5 id="lumière jour">JOUR</h5>
                        <div class="div-lumière-jour"></div>
                        <h5 id="lumière nuit">NUIT</h5>
                        <div class="div-lumière-nuit"></div>
                        <h5 id="champs vision ">Largeur du champs de vision</h5>
                        <div class="div-champs-vision"></div>
                    </div>
                    <h4 id="lumière inattendue"> Temps de réaction à une lumière inattendue</h4>
                    <div class="div-lumière-inattendue">
                        <h5 id="lumière jour">JOUR</h5>
                        <div class="div-lumière-jour"></div>
                        <h5 id="lumière nuit">NUIT</h5>
                        <div class="div-lumière-nuit"></div>
                    </div>

                </div>

                <h3 id="test-3">Fréquence cardiaque</h3>
                <div class="div-test-freq">
                    <p>
                        <table>
                            <tr>
                                <td>Fréquence Cardiaque </td>

                                <td>73/min</td>
                            </tr>
                            <tr>
                                <td>Durée de P </td>

                                <td>98 ms</td>

                            </tr>
                            <tr>
                                <td>Axe de P </td>

                                <td>0°</td>

                            </tr>
                            <tr>
                                <td>Amplitude de P</td>

                                <td>1,8 mm</td>

                            </tr>
                            <tr>
                                <td>PR </td>

                                <td>165 ms</td>

                            </tr>
                            <tr>
                                <td>Durée de QRS </td>

                                <td>80 ms, en pratique 110 ms </td>

                            </tr>
                            <tr>
                                <td>Axe de QRS</td>

                                <td>62°</td>

                            </tr>
                            <tr>
                                <td>Onde Q physiologique </td>

                                <td></td>

                            </tr>
                            <tr>
                                <td>QT(variable avec FC)</td>

                                <td>360 à 60bpm</td>

                            </tr>



                        </table>
                    </p>
                    <div id="bilan">
                        *BILAN: Rythme sinusal, ECG NORMAL
                        <a href="https://ecglibrary.com/ecgs/norm_2x.png"> Afficher ECG </a>
                    </div>
                </div>

                <h3 id="test-4">Température de la peau</h3>
                <div class="div-test-temperature">
                    <h4 id="son attendu"> Sans effort</h4>
                    <div class="div-son-attendu"></div>
                    <h4 id="son inattendu"> Avec effort </h4>
                    <div class="div-son-inattendu"></div>

                </div>

                <h3 id="test-5">Reconnaissance de tonalité</h3>
                <div class="div-test-tonalite">
                    <p>
                        <table>
                            <tr>
                                <th>Fréquence (Hz)</th>
                                <th>Son reproduit</th>
                                <th>Score</th>

                            </tr>
                            <tr>
                                <td>250</td>
                                <td>oui</td>
                                <td>......</td>
                            </tr>
                            <tr>
                                <td>500</td>
                                <td>oui</td>
                                <td>......</td>
                            </tr>
                            <tr>
                                <td>1000</td>
                                <td>oui</td>
                                <td>......</td>
                            </tr>
                            <tr>
                                <td>2000</td>
                                <td>oui</td>
                                <td>......</td>
                            </tr>
                            <tr>
                                <td>3000</td>
                                <td>oui</td>
                                <td>......</td>
                            </tr>
                            <tr>
                                <td>4000</td>
                                <td>oui</td>
                                <td>......</td>
                            </tr>
                            <tr>
                                <td>8000</td>
                                <td>non</td>
                                <td>......</td>
                            </tr>




                        </table>
                    </p>
                    <div id="bilan">
                        *BILAN:
                        <a href="https://ecglibrary.com/ecgs/norm_2x.png"> Afficher profil auditif </a>
                    </div>
                </div>

                </br>

            </p>

        </div>
    </section>

    <?php include("footer.php"); ?>


</body>