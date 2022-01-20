<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Ressources Internet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Le conditionnel en PHP</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <!-- link rel="stylesheet" type="text/css" href="css\reset.css" / -->  
        <!-- Le reset ou normalize permet 
        de s'assurer que les navigateurs aient le même style de départ --> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />    
         
    </head>
    <body>
        
    <?php

      /*  
        echo '<h2>Opérateurs logiques</h2>';
        $vrai = true;
        $faux = false;
        echo '<pre>';
        echo 'ET logique : VRAI si les deux opérandes sont vraies<br>';
        echo '$vrai &amp;&amp; $vrai : '; var_dump($vrai && $vrai);
        echo '$vrai &amp;&amp; $faux : '; var_dump($vrai && $faux);
        echo '$faux &amp;&amp; $vrai : '; var_dump($faux && $vrai);
        echo '$faux &amp;&amp; $faux : '; var_dump($faux && $faux);
        echo '</pre>';

        echo '<pre>';
        echo 'OU logique : VRAI si les une des opérandes est vraie<br>';
        echo '$vrai || $vrai : '; var_dump($vrai || $vrai);
        echo '$vrai || $faux : '; var_dump($vrai || $faux);
        echo '$faux || $vrai : '; var_dump($faux || $vrai);
        echo '$faux || $faux : '; var_dump($faux || $faux);
        echo '</pre>';

        echo '<pre>';
        echo 'NON logique : inversion vrai / faux<br>';
        echo '!$vrai : '; var_dump(!$vrai);
        echo '!$faux : '; var_dump(!$faux);
        echo '</pre>';
        
*/

        // $test=false;
      /*  
        $test = "avgvbrezbtzr";

        // Je ne rentre dans la condition que si $test est vrai

        // $test est faux si et seulement
        //     $test=false;
             $test=1;
        //     $test="";
        //     $test=null;
        
        if ($test) {
            echo "Je rentre bien dans la condition<br>";
        }
        echo 'Après la condition<br>';
        */
/*
        $mot = 'chien';
        $feminin = true;
        $pluriel = true;
    
            if ($feminin == false && $pluriel == false) {
                echo 'Quand $feminin = false et $pluriel = false, alors $mot sera au singulier et masculin :' . $mot;
            }
            elseif ($feminin == false && $pluriel == true) {
                echo 'Quand $feminin = false et $pluriel = true, alors $mot sera au pluriel et masculin :' . $mot . 's';
            }
            elseif ($feminin == true && $pluriel == false) {
                echo 'Quand $feminin = true et $pluriel = false, alors $mot sera au singulier et féminin :' . $mot . 'ne';
            }
            elseif ($feminin == true && $pluriel == true) {
                echo 'Quand $feminin = true et $pluriel = true, alors $mot sera au pluriel et féminin :' . $mot . 'nes';
            }
*/
/*
            $mot = 'chien';
            $feminin = false;
            $pluriel = false;
            if($feminin) { $mot = $mot . 'ne';}
            if($pluriel) { $mot = $mot . 's';}
            echo $mot .'<br>';
*/
        /*
        //$message_erreur = "Il y a eu une erreur";
        $message_erreur = "";
        
        // On nomme une variable qui contiendra un message d'erreur s'il y a une erreur.
        // Si il y a une erreur, on affiche l'erreur, puis on coupe l'execution du programme
        if ($message_erreur) {
            echo $message_erreur;
            //die();
            exit(); // Coupe l'exection du script
        }
        echo 'Après la condition<br>';


        // Le point d'exclamation permet d'inverser le boolean.
            // Si $test est vrai, !$test est faux
            // Si $test est faux, !$test est vrai
        if (!$message_erreur){
            echo "congratulation, il n'y a pas eu d'erreur !<br>";
        }
        */
        

        // Forme complete du if
        /*
        $variable = 1;
        echo $variable . '<br>';
        if ($variable == 1) {
            echo '$variable est égale à 1<br>';
        } elseif ($variable > 1) {
            echo '$variable est supérieure à 1<br>';
        } else {
            echo '$variable est inférieure à 1<br>';
        }
        ?><hr><?php
        */
/*
use function PHPSTORM_META\exitPoint;

$temperatureEau = random_int(-60,120);

        if ($temperatureEau <= 0) {
            echo 'L\'eau est à ' . $temperatureEau . ' degré Celcius :<br>';
            echo 'L\'eau est sous forme de glace.<br>';
            echo '<hr>';
        } elseif ($temperatureEau >= 100) {
            echo 'L\'eau est à ' . $temperatureEau . ' degré Celcius :<br>';
            echo 'L\'eau est gazeuse.<br>';
            echo '<hr>';
        } else {
            echo 'L\'eau est à ' . $temperatureEau . ' degré Celcius :<br>';
            echo 'L\'eau est mouillé.<br>';
            echo '<hr>';
        }
*/
        // */

        // Forme ternaire
        // 
        /*$nb = 1; 
        echo $nb .' stagiaire' . ($nb > 1 ? 's' : '') . '<br>';
        $resultat = ($test) ? 
                    ($resultatSiVrai) : 
                    ($resultatSiFaux);
        */
        /*
        $monnaie = 6;
        $fruit = ($monnaie <= 5) ? "mangue" : "orange";
        echo '$fruit opérateur ternaire : ' . $fruit . '<br>';
        if ($monnaie <= 5) {
            $fruit = "mangue";
        } else {
            $fruit = "orange";
        }
        echo '$fruit if/else : '  . $fruit . '<br>';
        */

        /*
        $test = 0;

        switch($test){
            case 0:
                echo "La variable $test est egale a 0<br>";
                break;
            case 1:
                echo "La variable $test est egale a 1<br>";
                break;
            case 2:
                echo "La variable $test est egale a 2<br>";
                break;
            case 3:
                echo "La variable $test est egale a 3<br>";
                break;
            case 4:
                echo "La variable $test est egale a 4<br>";
                break;
            default:
                echo "Ce nombre n'est pas compris entre 0 et 4<br>";
        }
        */
/*
        echo '<p>';
        $aspirateur = true;
        echo "valeur \$aspirateur : # $aspirateur #<br>";
        echo 'valeur $aspirateur : '; var_dump($aspirateur); echo '<br>';
        echo 'valeur $aspirateur : ';
        if($aspirateur) echo 'vrai'; else echo 'faux';
        echo '<br>';
        echo 'valeur $aspirateur : ' . ($aspirateur ? 'vrai' : 'faux') . '<br>';


        echo '<p>';
        $aspirateur = false;
        echo "valeur \$aspirateur : # $aspirateur #<br>";
        echo 'valeur $aspirateur : '; var_dump($aspirateur); echo '<br>';
        echo 'valeur $aspirateur : ';
        if($aspirateur) echo 'vrai'; else echo 'faux';
        echo '<br>';
        echo 'valeur $aspirateur : ' . ($aspirateur ? 'vrai' : 'faux') . '<br>';

        echo '<p>';
        $aspirateur = true;
        echo 'L\'aspirateur ' . ($aspirateur ? 'a' : 'n\'a pas') . ' été passé.';

        echo '<p>';
        $aspirateur = false;
        echo 'L\'aspirateur ' . ($aspirateur ? 'a' : 'n\'a pas') . ' été passé.';
*/
/*
    ?>

        <form method="post" action="index.php">
            Mot de passe : <input type="password" name="pass1"><br>
            confirmation : <input type="password" name="pass2"><br>
            <input type="submit" value="Envoyer">
        </form>
        <?php
        if(isset($_POST['pass1']) && isset($_POST['pass2'])) {
            echo 'Mot de passe reçu : ' . htmlspecialchars($_POST['pass1']) . 
            '<br>';
            echo 'Confirmation reçu : ' . htmlspecialchars($_POST['pass2']) . 
            '<br>';

            if (($_POST['pass1']) !== ($_POST['pass2'])) {
                echo 'Les mots de passes sont differents !';
            }else {
                echo 'Les mots de passes correspondent.';
            }
        }
        else {
            echo "(données non envoyées)";
        }
*/
/*
        ?>
        <hr>

        <form method="post" action="index.php">
        Indiqué vos points restants : <input type="number" name="Point" min="1" step="1" max="12"><br>
        Feu rouge grillé <input type="radio" name="codePv" value="1"><br>
        stop non marquer <input type="radio" name="codePv" value="2"><br>
        exès de vitesse <input type="radio" name="codePv" value="3"><br>
        <br>
        <p>Si c'est un exès de vitesse, veuillez indiqué la vitesse :</p>
        Indiqué une vitesse : <input type="number" name="Vitesse" min="91" step="1" max="230"> en km/h<br>
        <br>

        <input type="submit" value="Envoyer">
        <hr>
        </form>

        <?php

        $codePv = $_POST['codePv'] ?? '';
        $point = intval($_POST['Point'] ?? '');


 
        if($codePv == 1) {
            echo "Feu rouge non respecté <br>";
            //200€ pour un feu rouge
            //6 points
            $montant = 200;
            $retrait = 6;

        }
        elseif($codePv == 2) {
            echo "Stop non respecté <br>";
            //150€ pour un stop
            //4 points
            $montant = 150;
            $retrait = 4;
        }
        elseif($codePv == 3) {

            echo "Dépassement de la vitesse limite <br>";
            echo '<br>';

      
            $limite = 90;
            //30 50 70 90 110 130


            $vitesse = intval($_POST['Vitesse'] ?? '');

                if (($vitesse - $limite) <=10) {
                    $montant = 90;
                    $retrait = 1;
                    echo 'Votre vitesse était de ' . $vitesse .'km/h, la limite de vitesse est de 90 km/h.<br>';
                }
                
                elseif (($vitesse - $limite) >10) {
                    $montant = 135;
                    $retrait = 3;
                    echo 'Votre vitesse était de ' . $vitesse .'km/h, la limite de vitesse est de 90 km/h.<br>';
                }
            
            //90 € dépassement inférieur à 10km/h
            //135 € dépassement supérieur à 10km/h

            // 1 point dépassement inférieur à 10km/h
            // 3 points dépassement supérieur à 10km/h

        }
        
        // Vérifier nombre de points ne doit pas être négatif
        echo '<br>';
        echo 'Le montant est de ' . $montant . ' €<br>';
        echo 'Nombre de points retiré : ' . $retrait . ' <br>';
        echo 'Il vous restait ' . $point . ' points sur votre premie de conduire.<br>';

        $restant = $point - $retrait;

        if ($restant<=0) {
            echo 'Vous n\'avez plus de points sur votre permie';
        }else {
            echo 'Il ne vous reste plus que ' . $restant . ' points sur votre permie.';
        }
        // $points = ($points >= $retrait) ? $points - $retrait : 0;
        // echo ($points == 0) ? 'Permis retiré !<br> : '';
*/
/*        ?>
        <hr>

        <form method="post" action="index.php">
        Indiqué un nombre : <input type="number" name="test" min="1" step="1" max="10"><br>
        <br>

        <input type="submit" value="Envoyer">
        <hr>
        </form>

        <?php

        $test = intval($_POST['test'] ?? '');

                switch($test-1){
                    case 0:
                        echo "retente ta chance !<br>";
                        break;
                    case 1:
                        echo "tu as gagné $test coups de pied au fesse !<br>";
                        break;
                    case 2:
                        echo "tu as gagné $test claques !<br>";
                        break;
                    case 3:
                        echo "tu as gagné $test bonbons !<br>";
                        break;
                    case 4:
                        echo "et merde tu as la voiture !<br>";
                        break;
                    case 5:
                        echo "bingo c'est le $test, tu n'as rien mais bingo quoi !!!<br>";
                        break;
                    default:
                        echo "raté ! t'es nul !<br>";
                    }

        ?>
        <hr>

        <form method="post" action="index.php">
        Indiqué l'indice du tremblement de terre : <input type="number" name="Magnetude" min="0"><br>
        <br>

        <input type="submit" value="Envoyer">
        <hr>
        </form>

        <?php

        $Magnetude = intval($_POST['Magnetude'] ?? '');      

                switch($Magnetude){
                    case 0:
                        echo "erreur de saisie<br>";
                        break;
                    case 1:
                        echo "Micro-tremblement de terre, non ressenti<br>";
                        break;
                    case 2:
                        echo "Très mineur. Non ressenti mais détecté<br>";
                        break;
                    case 3:
                        echo "Mineur. Causant rarement des dommages<br>";
                        break;
                    case 4:
                        echo "Léger. Secousses notables d’objets à l’intérieur des maisons<br>";
                        break;
                    case 5:
                        echo "Modéré. Légers dommages aux édifices bien construits <br>";
                        break;
                    case 6:
                        echo "Fort. Destructeur dans des zones allant jusqu’ à 180 kilomètres à la ronde si elles sont peuplées<br>";
                        break;
                    case 7:
                        echo "Majeur. Dommages modérés à sévères dans des zones plus vastes.<br>";
                        break;
                    case 8:
                        echo "Important. Dommages sérieux dans des zones à des centaines de kilomètres à la ronde<br>";
                        break;
                    case 9:
                        echo "Dévastateur. Dévaste des zones sur des milliers de kilomètres à la ronde<br>";
                        break;
                    default:
                        echo 'C\'est la fin du monde !<br>';
                    }
                    /*if($Magnetude >9) {
                        echo 'C\'est l\'apocalypse';
                    }
                    else {
                        die('Erreur de saisie.<br>');
                    }
                    */
            ?>
            <!-- <br>
            <form method="get" action="index.php">
            <select name="degats" require>
                <option value="">choisir</option>
                <option value="Micro">Micro-tremblemen</option>
                <option value="tresmineur">Très mineur</option>
                <option value="Mineur">Mineur</option>
                <option value="leger">Léger</option>
                <option value="modere">Modéré</option>
                <option value="fort">Fort</option>
                <option value="majeur">Majeur</option>
                <option value="important">Important</option>
                <option value="devastateur">devastateur</option>
                <option value="test">(Autre)</option>
            </select>
            <input type="submit" value="Envoyer" name="submit">
            <hr>
            </form>
             -->
            <form method="get" action="index.php">
                Description des dégats (input ):<br>
                <input type="text" name="degats">
                <input type="submit" vaue="Envoyer" name="submit">
            </form>

            <?php

            if(isset($_GET['degats'])) {
                $degats = $_GET['degats'];

                $degats = preg_replace('/\s+/','',$degats);
                // var_dump($degats);
                switch(mb_strtolower($degats)) {
                    case 'micro':
                        $magnitude = 1;
                        break;
                    case 'tresmineur':
                    case 'trèsmineur':
                    case 'tmineur':
                        $magnitude = 2;
                        break;
                    case 'mineur':
                        $magnitude = 3;
                        break;
                    case 'leger':
                    case 'léger':
                        $magnitude = 4;
                        break;
                    case 'modere':
                    case 'modéré':
                        $magnitude = 5;
                        break;
                    case 'fort':
                        $magnitude = 6;
                        break;
                    case 'majeur':
                        $magnitude = 7;
                        break;
                    case 'important':
                        $magnitude = 8;
                        break;
                    case 'devastateur':
                        $magnitude = 9;
                        break;
                
                    default:
                        die('Erreur de saisie. Valeur de dégâts ' 
                                . htmlspecialchars($degats) . ' inconnue.<br>');
                }

                echo 'Pour un niveau de dégâts ' . htmlspecialchars($degats) 
                    . ' la magnitude est : ' . $magnitude . '<br>';
            }
            ?>
            <hr>

    </body>
</html>