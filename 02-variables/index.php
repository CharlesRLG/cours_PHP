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
            /*
            echo '<h2>Constrantes magiques</h2>';
            echo "Répertoire : " . htmlspecialchars(__DIR__) . '<br>';
            echo "Fichier : " . htmlspecialchars(__FILE__) . '<br>';
            echo "Version PHP : " . PHP_VERSION . '<br>';
            echo "Cette instruction se trouve à la ligne : " . __LINE__ . '<br>';
            echo "Fonction courante : " . __FUNCTION__ . '<br>';
            */
            /*
            $variable = 'valeur';
            echo '<h2>Caractères spéciaux</h2>'. "<br>\n";
            echo 'Guillement dans apostrophe = "'. "<br>\n";
            echo 'Apostrophe dans apostrophe avec le caractère \ : \' FIN'. "<br>\n";
            echo 'Balise html interprétée : <b>test</b>'. "<br>\n";
            echo htmlspecialchars('Balise html avec htmlspecialchars : <b>test é €</b>'). "<br>\n"; // retirer le rest CSS pour voir
            echo 'Avec \' on affiche $variable' . "<br>\n";
            //echo htmlentities('Balise html avec htmlentities : <b>test é €</b>') . "<br>\n";
            echo '<p>';
            echo "Avec des guillements on peut afficher des apostrophes  :'" . "<br>\n";
            echo "Afficher $variable : \$variable  " . "<br>\n";
            echo "Afficher un backslash : doublebackslash \  ". "<br>\n";
            echo "Afficher un guillement : attr=\"test\"  ". "<br>\n";
            echo "Ajouter des sauts de ligne dans le code source : #\n\n\n\n\n#";
            echo '</p>';
            */
            // Concatenation

            //echo "coucou" . ", " . "ça va ?" . "<br>";

            //echo 2 . 5 . true . "<br><br>";
           
            // Opérateurs de comparaisons

            /*
            $resultat = 3 == 3; // Operateur == compare deux valeurs.
            echo "<pre>résultat = ";var_dump($resultat);echo "</pre>";

            $resultat = "coucou" == "coucou"; // Il fonctionne aussi avec une chaine de caractere
            echo "<pre>résultat = ";var_dump($resultat);echo "</pre>";

            $resultat = 1 == "1"; // L'opérateur == ne compare pas le type de donnée
            echo "<pre>résultat = ";var_dump($resultat);echo "</pre>";

            $resultat = 1 !== "1"; // la valeur 1 est la même, mais le type est different
            echo "<pre>résultat = ";var_dump($resultat);echo "</pre>";

            $resultat = 1 === "1"; // L'opérateur === compara les valeurs ET les types de valeurs
            echo "<pre>résultat = ";var_dump($resultat);echo "</pre>";

            $resultat = 5 > 2; // Operateur > strictement superieur a
            $resultat = 5 < 2; // Operateur < strictement inferieur a
            $resultat = 5 >= 5; // Operateur >=  superieur ou egale a
            $resultat = 5 <= 5; // Operateur <= inferieur ou egale a

            $resultat = 5 != 8; // Renvoie true si les deux nombres sont differents
            
            echo '<p>Inversion de variables</p>';
            $nom1 = "Jean";
            $nom2 = "Pierre";
            echo "\$nom1 = $nom1     \$nom2 = $nom2<br>";

            $tmp = $nom2;
            $nom2 = $nom1;
            $nom1 = $tmp;
            unset($tmp);
            echo "\$nom1 = $nom1 &nbsp;&nbsp;&nbsp;&nbsp;\$nom2 = $nom2<br>";
            */
            /*
            echo "<pre>résultat = ";var_dump($resultat);echo "</pre>";
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
            /*
            echo '<h2>Conversions de type et formatage</h2>'. "<br>\n";
            $v = 10009671482.1E-5;
            echo "<pre>";
            echo 'Nombre en notation scientifique : 10009671482.1E-5';
            var_dump(strval($v));    // Transforme une variable en chaîne
            var_dump(intval($v));    // Retourne la valeur numérique entière équivalente d'une variable
            var_dump(floatval($v));  // Convertit une chaîne en nombre à virgule flottante
            var_dump(boolval($v));   // Récupère la valeur booléenne d'une variable
            var_dump(number_format($v,2,',',' ')); // Formate un nombre pour l'affichages
            echo "</pre>";
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

        <?= "Quels température en F ?" ?></p>

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
    echo '<p> en ayant '. $age .' ans, vous êtes né entre '. $dateN .'</p>';
    ?>

*/



    </body>
</html>