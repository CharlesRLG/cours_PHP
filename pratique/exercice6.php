<meta charset="utf-8"/>

<!-- les dates et heures: -->

<!-- Exemple1 -->
<?php
// Définit le fuseau horaire par défaut à utiliser.
date_default_timezone_set('Europe/Paris') .'<br>';
// Liste des fuseaux horaires supporté:
// https://www.php.net/manual/fr/timezones.php

// Affichage de quelque chose comme : Monday
//echo date("l <br>");

// Affichage de quelque chose comme : Monday 8th of August 2005 03:12:46 PM
// echo date('l jS \of F Y h:i:s A <br>');

// Affiche : July 1, 2000 is on a Saturday
//echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000)) . '<br>';

/* utilise les constantes dans le paramètre format */

// Affichage de quelque chose comme : Wed, 25 Sep 2013 15:28:57 -0700
//echo date(DATE_RFC2822) . '<br>';

// Affichage de quelque chose comme : 2000-07-01T00:00:00+00:00
//echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000)) .'<br>';
?>
<!-- <hr> -->

<!-- exemple 2 -->
<?php
// Affichage de quelque chose comme : Wednesday the 15th
// echo date('l \t\h\e jS');
?>
<!-- <hr> -->

<!-- exemple3 -->
<?php
// $tomorrow  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
// $lastmonth = mktime(0, 0, 0, date("m")-1, date("d"),   date("Y"));
// $nextyear  = mktime(0, 0, 0, date("m"),   date("d"),   date("Y")+1);
?>
<br>

<!-- exemple4 -->
<?php
// Aujourd'hui, le 10 Mars 2001, 5:16:18 pm, Fuseau horaire 
// Mountain Standard Time (MST)
 
$today = date("F j, Y, g:i a");                   // March 10, 2001, 5:16 pm
// $today = date("m.d.y");                           // 03.10.01
// $today = date("j, n, Y");                         // 10, 3, 2001
// $today = date("Ymd");                             // 20010310
// $today = date('h-i-s, j-m-y, it is w Day');       // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
// $today = date('\i\t \i\s \t\h\e jS \d\a\y.');     // It is the 10th day (10ème jour du mois).
// $today = date("D M j G:i:s T Y");                 // Sat Mar 10 17:16:18 MST 2001
// $today = date('H:m:s \m \e\s\t\ \l\e\ \m\o\i\s'); // 17:03:18 m est le mois
// $today = date("H:i:s");                           // 17:16:18
// $today = date("Y-m-d H:i:s");                     // 2001-03-10 17:16:18 (le format DATETIME de MySQL)

//Pour formater des dates dans d'autres langues, utilisez les fonctions setlocale() 
//et strftime() au lieu de la fonction date().
echo $today;
?>
<hr>

<!-- les erreur -->
<?php

            // $message_erreur="";
            // $message_erreur="Il y a eu une erreur";

            // var_dump (isset($message_erreur));
            // echo '<br>';

            // if (isset($message_erreur)){
            //     echo $message_erreur . "<br>";
            // }
            // Fonction empty() permet de tester si la variable est vide ou non
                // Renvoie 1 si la chaine de caractere est vide
                // False sinon

            // echo 'pour vérifier si vrai';
            // var_dump (empty($message_erreur));
            // echo '<br>';

// Les fonctions qui modifient les chaine de caractere
?>

<?php

//  Trouver et utiliser les fonctions :
$chaine = "Coucou Je suis une chAine faites pour le tEst !<br>";

//  - mise en minuscule
echo mb_strtolower($chaine) . '<br>';

//  - mise en majuscule
echo mb_strtoupper($chaine) . '<br>';

//  - conversion code en caractère 65->'A' U+1F600->😀
echo 'le code de A est :' . mb_ord('A') . '<br>';
echo 'le code de 😀 est :' . mb_ord('😀') . '<br>';

//  - conversion caractère en code 'A'->65 😀->U+1F600
echo 'le caractère dont le code est 65 est :' . mb_chr(65) . '<br>';
echo 'le caractère dont le code est 128512 est :' . mb_chr(128512) . '<br>';
echo 'le caractère dont le code est 1F600 est :' . mb_chr(0x1F600) . '<br>';

//  - date : afficher "aujourd'hui nous somme le 
//    <nom du jour> <nom du mois> <année>"
echo 'aujourd\'hui nous somme le ' . date('l') ." ". date('d/m/Y') . ' et il est ' . date( 'H:i:s' ) . '<br>';

//  - date : quelle date serons-nous dans 2 jours ? 
//           dans 2 mois ?
echo 'Dans deux jours, nous serons le ' . date('d')+2 . date('/m/Y') . '<br>';
?>
<hr>
<?php
echo (mb_strstr('une chaîne','admin') 
? 'admin' : 'pas admin') . '<br>';
echo (mb_strstr('ma fonction : admin','admin') 
? 'admin' : 'pas admin') . '<br>';
?>
<hr>
<?php

// - date : afficher "aujourd'hui nous somme le 
//   <nom du jour> <nom du mois> <année>"
//setlocale(LC_TIME, "fr_FR");
$formatter = datefmt_create(null, 
    IntlDateFormatter::FULL,  // date complète
    IntlDateFormatter::FULL); // heure exclue

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