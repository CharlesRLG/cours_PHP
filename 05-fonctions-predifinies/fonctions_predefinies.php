<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Ressources Internet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Les fonctions PHP - Exercices</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <!-- link rel="stylesheet" type="text/css" href="css\reset.css" /-- >  <!--Le reset ou normalize permet 
        de s'assurer que les navigateurs aient le même style de départ--> 
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />    
         
    </head>
    <body>
<?php
    // Trouver et utiliser les fonctions :
    // - mise en majuscul
    echo mb_strtoupper('strtoupper met tout en majuscules<br>');
    // - conversion code en caractère 65->'A' U+1F600->😀
    echo 'le code de A est : ' . mb_ord('A') . '<br>';
    echo 'le code de 😀 est : ' . mb_ord('😀') . '<br>';
    echo 'le code de ¡ est : ' . mb_ord('¡') . '<br>';
    
    // - conversion caractère en code 'A'->65 😀->U+1F600
    echo 'le caractère dont le code est 65 est : '. mb_chr(65) . '<br>';
    echo 'le caractère dont le code est 128512 est : '. mb_chr(128512) . '<br>';
    echo 'le caractère dont le code est 1F600 est : '. mb_chr(0x1F600) . '<br>';
    // - suppression des espaces en trop en début
    //   ou en fin de chaîne
    $var = "\t  \ttest test\n\n   ";
    echo '$var <pre>^' . $var . '$  </pre><br>';
    function mb_trim($string, $trim_chars = '\s'){
        return preg_replace('/^['.$trim_chars.']*(?U)(.*)['.$trim_chars.']*$/u', '\\1',$string);
    }
    echo '$var sans espaces :#' . mb_trim($var) . '#<br>';
    // - affichage d'un nombre en hexadécimal 240->F0
    echo '128512 en hexa : ' . dechex(128512) . '<br>';
    echo '128512 en hexa : ' . base_convert(128512,10,16) . '<br>';
    printf('%d en hexa : %X<br>',128512,128512);
    // - vrai/faux une chaine de caractère 
    //             contient une autre chaine
    echo (mb_strstr('une chaîne','admin') 
        ? 'admin' : 'pas admin') . '<br>';
    echo (mb_strstr('ma fonction : admin','admin') 
        ? 'admin' : 'pas admin') . '<br>';
    // - date : afficher "aujourd'hui nous somme le 
    //   <nom du jour> <nom du mois> <année>"
    //setlocale(LC_TIME, "fr_FR");
    $formatter = datefmt_create(null, 
        IntlDateFormatter::FULL,  // date complète
        IntlDateFormatter::NONE); // heure exclue

    echo 'aujourd\'hui nous sommes le ' . $formatter->format(time()) . '<br>';

    // - date : quelle date serons-nous dans 2 jours ? 
    //          dans 2 mois ?
    $date = date_create();
    date_add($date, date_interval_create_from_date_string('2 days'));
    echo 'dans 2 jours : ' . $formatter->format($date) . '<br>';
    date_add($date, date_interval_create_from_date_string('30 days'));
    echo 'dans 32 jours : ' . $formatter->format($date) . '<br>';

    $date = date_create();
    date_add($date, date_interval_create_from_date_string('2 months'));
    echo 'dans 2 mois : ' . $formatter->format($date) . '<br>';

    echo 'Conversion d\'un nombre à virgule en float<br>';
    $strnum ='1 335,43';
    $fmt = numfmt_create('fr_FR', NumberFormatter::DECIMAL);
    $floatV = numfmt_parse($fmt,$strnum);
    echo 'Nombre (str) ' . $strnum . ' (float) ' . $floatV
       . ' (avec number_format) ' . number_format($floatV,2,',',' ')  
       . ' (avec numfmt_format) ' . numfmt_format($fmt, $floatV)
       . '<br>';
    ?>

    
    


        

</body>
</html>
    