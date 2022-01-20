<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Ressources Internet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Les fonctions</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images\favicon.png" />
        <link rel="stylesheet" type="text/css" href="css\reset.css" />  <!--Le reset ou normalize permet 
        de s'assurer que les navigateurs aient le même style de départ--> 
        <link rel="stylesheet" type="text/css" href="css\style.css" />    
         
    </head>
    <body>
        
    <?php

        /*
        // Une portion de code que l'on souhaite réutiliser
        $prixHt = 1235;
        $prixTtc = $prixHt*1.20;
        echo "Le prix TTC de $prixHt € est $prixTtc €<br>";
        */

        /* Création de la fonction
         * Paramètres
         *  prixHt : prix Hors Taxes
         * Valeur retour
         *  prix TTC
        */
        /*
        function calculTTC(float $prixHT) {
            $prixTTC = $prixHT * (1 + 20/100);
            return $prixTTC;
        }
        $prixHT = 1235;
        echo 'Le prix TTC de ' . $prixHT  . ' est ' .calculTTC($prixHT). ' <br>';

        // Création d'une procédure d'affichage
        function calculeEtAffiche(float $prixHT) {
            $prixTTC = calculTTC($prixHT);
            //echo 'Le prix TTC de ' . $prixHt  . ' € est ' . $prixTtc . '<br>';
            echo 'Le prix TTC de ' . number_format($prixHT,2,',')
                        . ' € est ' . number_format($prixTTC,2,',') . ' €<br>';
        }
        calculeEtAffiche(20);
        calculeEtAffiche(30);
        calculeEtAffiche(50);



        // Paramètres optionnels
        function calculTTC_2(float $prixHT, float $TX_TVA = 0.20) {
            $prixTTC = $prixHT * (1 + $TX_TVA);
            return $prixTTC;
        }
        
        // Création d'une procédure d'affichage
        function calculeEtAffiche_2(float $prixHT, float $TX_TVA = 0.20) {
            $prixTTC = calculTTC($prixHT);
            //echo 'Le prix TTC de ' . $prixHt  . ' € est ' . $prixTtc . '<br>';
            echo 'Le prix TTC de ' . number_format($prixHT,2,',') . ' € ' 
                        . ' avec un taux de ' . ($TX_TVA * 100) . '%'
                        . ' est ' . number_format($prixTTC,2,',') . '<br>';
        }
        calculeEtAffiche(100);
        calculeEtAffiche(100,5.5);



        // Portée des variables
        function f() {
            $var_f = 'valeur';
            echo $var_f . ' ' . __FUNCTION__ . ' ' . __LINE__ . '<br>';
        }
        // Erreur : variable f non définie
        //echo $var_f . __LINE__ . '<br>';

        
        // Utilisation de la variable compteur qui existe en-dehors de la fonction
        $compteur = 0;
        function compte() {
            global $compteur;
            $compteur++;
        }
        compte();
        compte();
        compte();
        echo 'Comptage : ' . $compteur . "<br>";
        
        
        // static : garder en mémoire la valeur d'une variable
        function compteStatic() {
            static $compteurStatic = 0;
            // la variable $compteurStatic n'existe que dans la fonction
            $compteurStatic++;
            echo __FUNCTION__ . '  appelée ' . $compteurStatic . ' fois.<br>';
        }
        compteStatic();
        compteStatic();
        compteStatic();
        
        */
        // Passage par valeur
     /*   function test($param) {
            echo 'Fonction ' . __FUNCTION__ . ' ligne ' . __LINE__ . 
                ' $param=' . $param. '<br>';

            $param = "nouvelle valeur";

            echo 'Fonction ' . __FUNCTION__ . ' ligne ' . __LINE__ . 
                ' $param=' . $param  . '<br>';
        }
        $param = 'test';
        echo ' ligne ' . __LINE__ .  ' $param=' . $param . '<br>';
        test($param);
        echo ' ligne ' . __LINE__ .  ' $param=' . $param . '<br>';
*/
        // Passage par référence avec le &
        // Passage de type Données/Résultat
/*       function augmenter_buffer(&$buffer) {
            echo 'Fonction ' . __FUNCTION__ . ' ligne ' . __LINE__ . 
                ' $buffer=' . $buffer. '<br>';

            $buffer .= " ... des données qui viennent du réseau ...";

            echo 'Fonction ' . __FUNCTION__ . ' ligne ' . __LINE__ . 
                ' $buffer=' . $buffer  . '<br>';
        }
        $buffer = 'test';
        echo ' ligne ' . __LINE__ .  ' $buffer=' . $buffer . '<br>';
        augmenter_buffer($buffer);
        echo ' ligne ' . __LINE__ .  ' $buffer=' . $buffer . '<br>';
*/
    ?>
<pre>
    <p>Exercice 1</p>
    <br>
    <p>Fonction avec While</p>
<?php

/*
        u(0) = 500
        u(n+1) = u(n) * 0.9 + 1
*/

function suite($N)
{
    $u = 500;
    $n = 0;
    while ($n < $N) {
        $n = $n + 1;
        $u = 0.9 * $u + 1;
    }
    return [$u, $n];
}

?>
<table style="border: 1px black solid">
    <tr>
        <td style="border: 1px black solid"><?= number_format (suite(0)[0],2,',','&nbsp') ?></td>
        <td style="border: 1px black solid"><?= number_format (suite(1)[0],2,',','&nbsp') ?></td>
        <td style="border: 1px black solid"><?= number_format (suite(2)[0],2,',','&nbsp') ?></td>
        <td style="border: 1px black solid"><?= number_format (suite(3)[0],2,',','&nbsp') ?></td>
        <td style="border: 1px black solid"><?= number_format (suite(4)[0],2,',','&nbsp') ?></td>
        <td style="border: 1px black solid"><?= number_format (suite(5)[0],2,',','&nbsp') ?></td>
    </tr>
    <tr>
        <td style="border: 1px black solid"><?= suite(0) [1] ?></td>
        <td style="border: 1px black solid"><?= suite(1) [1] ?></td>
        <td style="border: 1px black solid"><?= suite(2) [1] ?></td>
        <td style="border: 1px black solid"><?= suite(3) [1] ?></td>
        <td style="border: 1px black solid"><?= suite(4) [1] ?></td>
        <td style="border: 1px black solid"><?= suite(5) [1] ?></td>
    </tr>
</table>
<p>Fonction avec For</p>
<?php

    function suite2($B)
    {
        $k = 500;
        $i = 0;

        for ($i=0;$i<$B;$i++){
            $k = 0.9 * $k + 1;
        }
        return [$k, $i];
    }
?>
<table style="border: 1px black solid">
    <tr>
        <td style="border: 1px black solid"><?= number_format (suite2(0)[0],2,',','&nbsp') ?></td>
        <td style="border: 1px black solid"><?= number_format (suite2(1)[0],2,',','&nbsp') ?></td>
        <td style="border: 1px black solid"><?= number_format (suite2(2)[0],2,',','&nbsp') ?></td>
        <td style="border: 1px black solid"><?= number_format (suite2(3)[0],2,',','&nbsp') ?></td>
        <td style="border: 1px black solid"><?= number_format (suite2(4)[0],2,',','&nbsp') ?></td>
        <td style="border: 1px black solid"><?= number_format (suite2(5)[0],2,',','&nbsp') ?></td>
    </tr>
    <tr>
        <td style="border: 1px black solid"><?= suite2(0) [1] ?></td>
        <td style="border: 1px black solid"><?= suite2(1) [1] ?></td>
        <td style="border: 1px black solid"><?= suite2(2) [1] ?></td>
        <td style="border: 1px black solid"><?= suite2(3) [1] ?></td>
        <td style="border: 1px black solid"><?= suite2(4) [1] ?></td>
        <td style="border: 1px black solid"><?= suite2(5) [1] ?></td>
    </tr>
</table>

<p>Exercice 2</p>
<br>
<?php

function anneeSuite($annee)
{
    $v = 0;
    $U = 1000;

    while ($v <= $annee) {
        $v = $v + 1;
        $U = 1.02 * $U + 2400;
    }
    return [$v, $U];
}


?>
  <table style="border: 1px black solid">
  <?php  for ($j=1;$j>=0;$j--) { ?>

<tr>
    <?php 
    for ($i=-1;$i<15;$i++) { ?>
        <td style="border: 1px black solid"><?= number_format (anneeSuite($i)[$j],$j==0?0:2,',','&nbsp;') ?></td>
    <?php } ?>
    
</tr>
<?php } ?>
    <tr>
    <?php 
    for ($i=2010;$i<=2025;$i++) { ?>
        <td style="border: 1px black solid"><?= $i ?></td>
    <?php } ?>
    </tr>
</table>      

</pre>
<pre>
    <p>Exercice 3.</p>
    <br>

<?php
// /*
// S1 = 1.5     S2 = 1.75     S3 = 1.875   S4 = 1.9375
function suiteGeometrique($n)
{
    $s = 0;
    $u = 0;

    while($s <= $n){
        $u = $u + 1/(2**$s);
        $s = $s + 1;
        
    }
    return [$s, $u];
}
?>   
</pre>
<table style="border: 1px black solid">
<?php  for ($j=1;$j>=0;$j--) { ?>

    <tr>
        <?php 
        for ($i=-1;$i<=30;$i++) { ?>
            <td style="border: 1px black solid"><?= number_format (suiteGeometrique($i)[$j],$j==0?0:7,',','&nbsp;') ?></td>
        <?php } ?>
        
    </tr>
    <?php } ?>
</table>      
<?php

    echo '$n>1,9 => 5<br>';
    echo '$n>1,99 => 8<br>';
    echo '$n>1,999 => 11<br>';

    // seuil = 26;
?>   
</pre>
<pre>
<h2>5b. Écrire un programme qui prend en compte le seuil et donne en sortie le plus petit entier n tel que Sn > seuil.</h2>
    <?php

    function seuil($x)
    { //Valeur à atteindre
        $m = 1; //valeur de départ
        $compteur = 0; // Compteur
        while ($m < $x) {
            $compteur++;
            $m = $m + (1 / (2 ** $compteur));
        }
        return $compteur;
    }

    function afficher($it, $pa)
    {
        echo "Seuil $pa atteint au bout de : $it itération.s " . "<br>";
    }

    afficher(seuil(1), 1);
    afficher(seuil(1.5), 1.5);
    afficher(seuil(1.9), 1.9);
    afficher(seuil(1.99), 1.99);
    afficher(seuil(1.999), 1.999);

    ?>
</pre>
</body>
</html>