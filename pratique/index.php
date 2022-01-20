<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Ressources Internet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Base d'une page</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images\favicon.png" />
        <link rel="stylesheet" type="text/css" href="css\reset.css" />  <!--Le reset ou normalize permet 
        de s'assurer que les navigateurs aient le même style de départ--> 
        <link rel="stylesheet" type="text/css" href="css\style.css" />    
         
    </head>
    <body>

        <form method="GET" action="index.php">
            a = <input type='text' name='a' required><br>
            b = <input type='text' name='b' required><br>
           <input type='submit' name='submit' value="envoyer"><br>
        </form>

        <?php
            // Déclarer deux variables $a et $b
            // Faire les opérations mathématiques 
            // entre les deux (au moins + - * /)
            $a = $_REQUEST['a'] ?? 0;
            $b = $_REQUEST['b'] ?? 0;
            echo 'a=' . $a . '<br>';
            echo 'b=' . $b . '<br>';
        ?>
    </body>
</html>