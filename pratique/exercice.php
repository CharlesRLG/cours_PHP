<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Ressources Internet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Variables en PHP</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images\favicon.png" />
        <link rel="stylesheet" type="text/css" href="css\reset.css" />  <!--Le reset ou normalize permet 
        de s'assurer que les navigateurs aient le même style de départ--> 
        <link rel="stylesheet" type="text/css" href="css\style.css" />    
         
    </head>
    <body>
    <p>

        </form>
        <!-- En PHP on est capable de faire des calculs -->
        <?php /*
            echo "<p>";
            echo 10+7; 
            echo "</p>";
        
            $nombre1 = 10;   // $  + nom de variable sans espace, sans accent = valeur de la variable 

            echo "<p>";
            echo $nombre1;
            echo "</p>";

            $nombre2 = 5;
            $addition = $nombre1 + $nombre2;

        //    Quand on utilise les guillements, les variables sont interprétées 
            echo "<p>L'addition du nombre1 et du nombre2 est $addition</p>";

            // Quand on utilise des quotes, les variables ne sont pas interprétées
            echo '<p>L\'addition du nombre1 et du nombre2 est $addition</p>';
            echo '<p>L\'addition du nombre1 et du nombre2 est ' . $addition . '</p>';

            $concat = $nombre1 . $nombre2;
            echo '$nombre1 . $nombre2 =' . $concat . '<br>';

        */   // Types de valeurs
/*
            // Type int pour les nombres entiers
            $nombre = 8;
            echo $nombre . ' ' . gettype($nombre) . "<br>";

            // Type double pour les nombres decimaux
            $nombre = 10.5;
            echo $nombre . ' ' . gettype($nombre)  . "<br>";

            // Type double pour les nombres irrationnels

            $nombre = 10/3; // 3.33333333333333
            echo '$nombre=' . $nombre . ' ' . gettype($nombre)  . "<br>";

            // Type float compatible pour les nombres rationnels et irrationnels

            // Type string pour les chaines de caracteres
            $variable = "Ceci est une chaine de caractere";
            echo $variable . ' ' . gettype($variable)  . "<br>";

            // Type string pour un caractere
            $variable="a";
            echo $variable . ' ' . gettype($variable)  . "<br>";

            // Type boolean pour True et False
            // Attention, si une variable est true, alors un echo renverra 1
            // Si la variable est fausse, il renvoie une chaine de caractere vide
            $variable= true;
            echo $variable . "<br>";
            echo gettype($variable)  . "<br>";

            $variable= true;
            echo $variable . ' ' . gettype($variable) . "<br>";

            $variable= false;
            echo $variable . ' ' . gettype($variable) . "<br>";


            // Référence par assignation
            echo'<hr>';
            $fruit1 = "fraise";
            $fruit2 = $fruit1;
            echo "<p>Le fruit1 est $fruit1</p>";
            echo "<p>Le fruit2 est $fruit2</p>";
            echo'<hr>';
            $fruit1 = "Abricot";
            echo "<p>Le fruit1 est $fruit1</p>";
            echo "<p>Le fruit2 est $fruit2</p>";
            echo'<hr>';
*/
            // Les constantes
            /*
            define("CAPITAL", "Paris");
            const CAPITALE_EUR = "Strasbourg";
            echo CAPITAL . "<br>";
            echo CAPITALE_EUR . "<br>";
            // Une constante ne peut pas être défini une deuxieme fois. Si ça arrive, une erreur est levé
            define("CAPITAL", "Marseille");
            */

            // Concatenation

            //echo "coucou" . ", " . "ça va ?" . "<br>";

            //echo 2 . 5 . true . "<br><br>";
           
            // Opérateurs de comparaisons

            /*
            $resultat = 3 == 3; // Operateur == compare deux valeurs.
            $resultat = "coucou" == "coucou"; // Il fonctionne aussi avec une chaine de caractere
            $resultat = 1 == "1"; // L'opérateur == ne compare pas le type de donnée
            $resultat = 1 === "1"; // L'opérateur === compara les valeurs ET les types de valeurs

            $resultat = 5 > 2; // Operateur > strictement superieur a
            $resultat = 5 < 2; // Operateur < strictement inferieur a
            $resultat = 5 >= 5; // Operateur >=  superieur ou egale a
            $resultat = 5 <= 5; // Operateur <= inferieur ou egale a

            $resultat = 5 != 8; // Renvoie true si les deux nombres sont differents
            
            echo "<pre>résultat = ";
            var_dump($resultat);
            echo "</pre>";
            */
            /*
            echo "Conversion pouces en cm<br><br>";
            const POUCE_CM = 2.54;
            $pouces = 22;
            $cm = $pouces * POUCE_CM;
            echo $pouces . ' pouces = ' . $cm . ' cm<br>';

            $cm = 50;
            $pouces = $cm / POUCE_CM;
            echo $cm . ' cm = ' . round($pouces,2) . ' pouces<br>';
            
            $a = 3;
            $b = 4;
            $c = sqrt($a**2 + $b**2);
            echo 'L\'hypoténuse d\'un triangle rectangle ';
            echo ' dont les côtés de l\'angle valent ';
            echo $a . ' et ' . $b . ' vaut ' . round($c,2);
            */
            # y°F = x°C * 1.8 + 32
?>

<?= "Quels température en C ?" ?></p>
<?php $saisie = $_GET['saisie'] ?? '0'; ?>
<form method="GET" action="<?=$_SERVER['PHP_SELF'] ?>">
<input type="text" name="saisie" value="<?= $saisie ?? '' ?>"/>
<input type="submit" value="envoyer">
</form>
        <!-- En PHP on est capable de faire des calculs -->
<?php 
            
        # y°F = x°C * 1.8 + 32
$degreC = $saisie;
const transition = 32;
$degreF = ($degreC * 1.8) + transition;
echo'<br>';
echo '<p> Pour '. $degreC .' C il fait '. round($degreF,2) .' F </p>';
?>

<hr>

<?= "Quels température en F ?" ?>

<?php $saisie3 = $_GET['saisie3'] ?? '0'; ?>
<form method="GET" action="<?=$_SERVER['PHP_SELF'] ?>">
<input type="text" name="saisie3" value="<?= $saisie ?? '' ?>"/>
<input type="submit" value="envoyer">
</form>

<?php 
$degreF2 = $saisie3;
$degreC2 = ($degreF2 - transition) / 1.8;
echo'<br>';
echo '<p> Pour '. $degreF2 .' F il fait '. round($degreC2,2) .' C </p>';
?>

<hr>
<?php echo'<p>Votre age au 12/12/2021</p>'; ?>
<?php $saisie2 = $_GET['saisie2'] ?? '0'; ?>
<form method="GET" action="<?=$_SERVER['PHP_SELF'] ?>">
<input type="text" name="saisie2" value="<?= $saisie2 ?? '' ?>"/>
<input type="submit" value="envoyer">
</form>

<?php
$age = $saisie2;
const calcdate = 2021;
$dateN = (calcdate - $age);
echo'<br>';
echo '<p> en ayant '. $age .' ans, vous êtes né en '. $dateN .'</p>';
?>

<?php $saisie5 = $_GET['saisie5'] ?? '0'; 
$age5 = intval($saisie5);
const ANNEE = '2021';
$anneN = ANNEE - $age5;?>
<form method="GET" action=
    "<?=$_SERVER['PHP_SELF'] ?>">

    <label for="saisie5">
        Votre âge au 31/12/<?= ANNEE ?>
    </label>
    <input type="text" name="saisie5" value="<?= $saisie5 ?? '' ?>"/>
    <input type="submit" value="envoyer">
</form>
<p>
    <?php echo 'votre année de naissance : ' . $anneN ;?></p>


<hr>
<?php $saisie = $_GET['saisie8'] ?? '0'; 
$prixHT = floatval($saisie);
const TVA = 5.5/100;
$prixTTC = $prixHT * (1 + TVA);?>
<form method="GET" action=
    "<?=$_SERVER['PHP_SELF'] ?>">

        <label for="saisie8">
       Prix HT
        </label>
<input type="text" name="saisie8" value="<?= $saisie ?? '' ?>"/>
<input type="submit" value="envoyer">
</form>
<p>
    <?php echo 'Prix TTC=' 
            . round($prixTTC,2)
            . ' TVA (' . round(100*TVA,1) 
            . '%)='
            . $prixTTC - $prixHT ?></p>
<hr>

<?php echo'<p>rentré une durée en second</p>'; ?>
<?php $saisie9 = $_GET['saisie9'] ?? '0'; ?>
<form method="GET" action="<?=$_SERVER['PHP_SELF'] ?>">
<input type="number" 
        min="0" 
        max="1000000000" 
        step="1" 
        name="saisie9"
        value="<?= $saisie9 ?? '' ?>"/>
<input type="submit" value="envoyer">
</form>

<?php
    $SECTOTALE = intval($saisie9);
    $Heures = intdiv($SECTOTALE,3600);
    $MINUTES = intdiv($SECTOTALE%3600,60);
    $Seconde = $SECTOTALE % 60;
?>
<p> <?php echo " $SECTOTALE = ${Heures}h${MINUTES}m${Seconde}s" ?></p>
<hr>

<?php echo'<p>centaine, dizaine et unité</p>'; ?>
<?php $saisie9 = $_GET['saisie9'] ?? '0'; ?>
<form method="GET" action="<?=$_SERVER['PHP_SELF'] ?>">
<input type="number" 
        min="0" 
        max="1000000000" 
        step="1" 
        name="saisie9"
        value="<?= $saisie9 ?? '' ?>"/>
<input type="submit" value="envoyer">
</form>

<?php
    $unitetot = intval($saisie9);
    $centaines = intdiv($unitetot,100);
    $dizaines = intdiv($unitetot%100,10);
    $unite = $unitetot % 10;
?>
<p> <?php echo " $unitetot = ${centaines} centaines, ${dizaines} dizaines, ${unite} unitées," ?></p>



</body>
</html>