<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Ressources Internet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Boucles en php</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images\favicon.png" />
        <link rel="stylesheet" type="text/css" href="css\style.css" />    
         
    </head>
    <body>
        <?php
/*
//        while($condition){
            //instruction
//        }

*/
/*
         while(true){
             echo "Salut !"; 
         }
*/
/*
         $i=0;
         while($i<10){
             echo "Salut $i<br>";    // while signifie tant que // toujours mettre une incrémentation ++
             $i++;
         }
         echo 'Boucle terminée $i = ' . $i . '<br>';
         echo '<hr>';
*/
/*
         valeur $i      Test $i<10 :    Affichage   $i++
         0                  vrai        Salut 0      1
         1                  vrai        Salut 1      2
         2                  vrai        Salut 2      3
         3                  vrai        Salut 3      4
         4                  vrai        Salut 4      5
         5                  vrai        Salut 5      6
         6                  vrai        Salut 6      7
         7                  vrai        Salut 7      8
         8                  vrai        Salut 8      9
         9                  vrai        Salut 9      10
         10                 faux  
         echo '<hr>';           
*/
/*
        $j=0;

        while($j<10){
            echo '$j*$j =' . $j*$j . "<br>";
            $j++;
        }
        echo '<hr>';

        $continuer = true;
        while($continuer) {
            echo 'je continue parce que $continuer est vrai<br>';
            echo ' le critère pour continuer ou s\'arrêter est parfois complexe'; // while à besoin de remplir un objectif
                                                                                  // pour s'arrêter ex: while ($j<10)
            $continuer = false;
        }
*/
/*
        for (<initialisation>) ; <condition> ; <incrément>
        // La boucle for
*/
/*
        for($i = 10 ; $i <= 20 ; $i++){
            echo $i . " ";
        }
        ?>
        <p>Exemple : Afficher les chiffres de 40 à 70</p>
        <?php
        for($i=40;$i<=70;$i++){
            echo $i . " ";
        }
*/

/*
        // 
        ?>
            <p>Exercice : Affichier les chiffres entre 40 et 100, en comptant de 2 en 2 (40,42,44...)</p>
        <?php
        for($i = 40 ; $i <= 100 ; $i = $i += 2){
            echo $i .' ';
        }
*/
/*    

       echo '<p>Exercice: Faire un décompte pour la  nouvelle année </p>';

        

        for($i = 40 ; $i >= 0 ; $i--)
        {
            echo $i . ' ';
        }
*/
/*
Brigitte a 32 ans

Elle a deux enfants : Carole qui a 8 ans et Thomas qui a 6 ans

Utiliser une boucle POUR pour faire évoluer les âges de Brigitte, Carole et Thomas.

Dans combien d'années l'âge de Brigitte sera-t-il égal à la somme des âges de Carole et Thomas ?*
*/

$B=32;
$C=8;
$T=6;
//$Brigitte+$i = ($Carole+$i)+($Thomas+$i)
for ($i=1; $i<=80 ; $i++)
        {
/*
            $B++;
            $C++;
            $T++;

            echo "Année : $i Brigitte : $B Carole : $C Thomas : $T <br>";
*/

            if ($B+$i == $C+$T+2*$i) {
                echo 'Dans ' . $i . ' ans, Carole et Thomas auront autant d\'année que Brigitte <br>';
                echo '<hr>';
                echo 'Brigitte aura ' . $B+$i . ' ans<br>';
                echo 'Carole aura ' . $C+$i . ' ans<br>';
                echo 'Thomas aura ' . $T+$i . ' ans<br>';
            }
        }
        echo '<hr>';
    // un nombre de 0 a 1000, il faut que la centaine au cube + la dizaine au cube + l'uniter au cube == le nombre
/*
    $unitetot = intval($saisie9);
    $centaines = intdiv($unitetot,100);
    $dizaines = intdiv($unitetot%100,10);
    $unite = $unitetot % 10;
*/
echo "Les nombres suivant sont des nombres d'armstrong :<br>";


    for ($i=0; $i<=9 ; $i++)
            {
            for ($a=0; $a<=9 ; $a++) 
                {
                    for ($e=0; $e<=9 ; $e++) 
                    {
                    
                        $icube = $i*$i*$i;
                        $acube = $a*$a*$a;
                        $ecube = $e*$e*$e;

                        $totale = $icube + $acube + $ecube;

                        if (((100*$i)+(10*$a)+$e == $totale) && $totale > 100){
                            
                            echo "- " . $totale . "<br>";
                        }
                    } 
                }
            }



/*
        ?>
        <h2>Afficher une liste déroulante qui affiche les années entre 1970 et 2040</h2>

        <form action="" method="get">
            <div class="conteneurListeDeroulante">
                <label for="annee">Choisissez une année : </label>
                <select name="annee" id="annee">
                    <?php
                        for($i=1970;$i<=2040;$i++){
                            // echo "<option value=\"$i\">$i</option>"; 
                           ?>

                           
                            <option value="<?= $i ?>"><?= $i ?></option>
                           <?php   

                        }
                    ?>
                
                    <!-- 
                    <option value="1970">1970</option>
                    <option value="1971">1971</option>
                    <option value="1972">1972</option> 
                    -->
                </select>
            </div>
        </form>

        <!-- Creer un tableau, de 10 ligne par 10 colonne, numerotez comme suit 
        Chaque cellule contient le numero de sa ligne, et le numero de sa colonne 

        L1C1 L1C2 L1C3 L1C4 ... 
        L2C1 L2C2 L2C3 L2C4 ... 
        L3C1 L3C2 L3C3 L3C4 ...
        ...  ...  ...  ... -->

        <table border="1">
              <tbody>
                    <?php
                        for($z=1;$z<=50;$z++){ // z est le nombre de colonne
                            ?>
                            <tr>
                            <?php
                                for($i=1;$i<=20;$i++){ // i est le nombre de lignes
                                    ?>
                                        <td>L<?= $z ?>C<?= $i ?></td>
                                    <?php
                                }
                                ?>
                            </tr>
                            <?php
                        }
                    ?>

              </tbody>          
        </table>
*/
         ?>

    </body>
</html>