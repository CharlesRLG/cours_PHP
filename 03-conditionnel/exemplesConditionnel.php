<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Ressources Internet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Le conditionnel en PHP - Exercices</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images\favicon.png" />
        <!-- link rel="stylesheet" type="text/css" href="css\reset.css" /-- >  <!--Le reset ou normalize permet 
        de s'assurer que les navigateurs aient le même style de départ--> 
        <link rel="stylesheet" type="text/css" href="css\style.css" />    
         
    </head>
    <body>
    
    <h2>Exercice mot de passe</h2>
    <?php
        

        $action = filter_var($_SERVER['PHP_SELF'], FILTER_VALIDATE_URL);

        $nom = 'motdepasse';
        $motdepasse = '';
        if(isset($_POST[$nom])) {
            $saisie = $_POST[$nom] ?? '';
            $motdepasse = $saisie;
        }
       
        ?>
        <form method="POST" action="<?= $action ?>">
            <label for name="<?= $nom ?>">Mot de passe</label>
            <input type="password" name="<?= $nom ?>" />
            <input type="submit" value="envoyer">
        </form>
        

        <?php

            /* compléter à partir d'ici */
            $secret = "123456";
            if ($motdepasse == $secret) {
                echo 'bienvenue<br>';
            }
            else {
                echo 'désolé mot de passe incorrect.<br>';
            }
        
        ?>

    <h2>Modulo</h2>
    <p>Indiquer si un nombre est divisible par 2, 3 et 5</p>
    <?php 
        $action = filter_var($_SERVER['PHP_SELF'], FILTER_VALIDATE_URL);
        $nom = 'nb';
        $nb = 0;
        if(isset($_GET[$nom])) {
            $saisie = $_GET[$nom];
            $nb = intval($saisie);
        }
        ?>
        <form method="GET" action="<?= $action ?>">
            <label for name="<?= $nom ?>">Nombre</label>
            <input type="number" name="<?= $nom ?>" />
            <input type="submit" value="envoyer">
        </form>

        <?php

            /* compléter à partir d'ici */
            if($nb % 2 == 0 and $nb % 3 == 0 and $nb % 5 == 0) {
                echo 'Nombre ' . $nb . ' divisible par 2, 3 et 5<br>';
            }
            else {
                echo 'Nombre ' . $nb . ' non divisible par 2, 3 et 5<br>';
            }
        
        ?>

    <h2>Plus grand, plus petit</h2>
    <p>Trouver le plus grand / le plus petit parmi une série de trois nombres</p>
    <?php 
        $action = filter_var($_SERVER['PHP_SELF'], FILTER_VALIDATE_URL);
        $a = $_GET['a'] ?? 0;
        $b = $_GET['b'] ?? 0;
        $c = $_GET['c'] ?? 0;
    ?>
        <form method="GET" action="<?= $action ?>">
            <label for name="a">a=</label>
            <input type="number" name="a" /><br>
            <label for name="b">b=</label>
            <input type="number" name="b" /><br>
            <label for name="c">c=</label>
            <input type="number" name="c" /><br>
            <input type="submit" value="envoyer">
        </form>

        <?php

            /* compléter à partir d'ici */
            if($a <= $b and $a <= $c)
                echo 'Plus petit : ' . $a;
            elseif($b <= $a and $b <= $c)
                echo 'Plus petit : ' . $b;
            else
                echo 'Plus petit : ' . $c;

            if($a >= $b and $a >= $c)
                echo 'Plus grand : ' . $a;
            elseif($b >= $a and $b >= $c)
                echo 'Plus grand : ' . $b;
            else
                echo 'Plus grand : ' . $c;

        ?>

    <h2>Campanules et primevères</h2>
    <p>Calculer le prix d'achat des campanules et des primevères</p>
    <ul>Règles de gestion : 
        <li>1,80 € / pot de campanules</li>
        <li>2,40 € / pot de primevères</li>
        <li>10% de réduction sur le total pour 5 pots de campanules achetés ou 6 pots de primevères achetés</li>
    </ul>
    <?php 
        $action = filter_var($_SERVER['PHP_SELF'], FILTER_VALIDATE_URL);
        $primevere = $_GET['primeveres'] ?? -1;
        $campanules = $_GET['campanules'] ?? -1;
    ?>
        <form method="GET" action="<?= $action ?>">
            <label for name="primeveres">Pots primevères : </label>
            <input type="number" name="primeveres" /><br>
            <label for name="campanules">Pots campanules : </label>
            <input type="number" name="campanules" />
            <input type="submit" value="envoyer">
        </form>

        <?php

            /* compléter à partir d'ici */
            if(is_numeric($primevere) && is_numeric($campanules)) {
              $prix = $primevere * 2.4 + $campanules * 1.8;
              if($primevere >= 6 or $campanules >=5) {
                  $prix *= 0.9; // Réduction 10% équivaut à $prix = $prix * 0.9;
              }
              echo 'Prix des plantes : ' . 
                 number_format($prix,2,',') . ' € ' ?> <br> 
          <?php } ?>
        


        <h2>Switch feu tricolore</h2>
        <p>Ecrire un switch d'après la couleur du feu.
            Vert je passe, rouge je m'arrête, orange, je redouble d'attention.
    </p>
    <?php
        $action = filter_var($_SERVER['PHP_SELF'], FILTER_VALIDATE_URL);

        $saisie = $_GET['saisie'] ?? '-1';
        $couleur = $saisie;

    
        ?>
        <form method="GET" action="<?= $action ?>">
            <label for="saisie">Couleur</label>
            <input type="text" name="saisie" value="<?= $saisie ?? '' ?>"/>
            <input type="submit" value="envoyer">
        </form>

        <?php

        /* compléter à partir d'ici */
        switch ($couleur) {
          case 'vert':
              echo 'je passe<br>';
              break;
          case 'orange':
              echo 'attention<br>';
              break;
          case 'rouge':
              echo 'je m\'arrête<br>';
              break;
          default:
              echo '???<br>';
              break;
        }

        echo 'suite du switch ligne ' . __LINE__ . '<br>';

        $action = 
          match ($couleur) {
            'vert' => 'je passe',
            'orange' => 'attention',
            'rouge' => 'je m\'arrête',
            default => '???'
          };
          
          echo 'avec match : ' . $action  . '<br>';

        ?>

</body>
</html>
