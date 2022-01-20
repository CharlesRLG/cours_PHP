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
            $degreF = ($degreC ** 1.8) + transition;
            echo'<br>';
            echo '<p> Pour '. $degreC .' C il fait '. $degreF .' F </p>';
        ?>
        <hr>
        <?= "Quels température en F ?" ?></p>
        <?php $saisie3 = $_GET['saisie3'] ?? '0'; ?>
        <form method="GET" action="<?=$_SERVER['PHP_SELF'] ?>">
            <input type="text" name="saisie3" value="<?= $saisie ?? '' ?>"/>
            <input type="submit" value="envoyer">
        </form>
        <!-- En PHP on est capable de faire des calculs -->
        <?php 
            
            # y°F = x°C * 1.8 + 32
            $degreF = $saisie;
            const transition = 32;
            $degreC = ($degreC / 1.8) - transition;
            echo'<br>';
            echo '<p> Pour '. $degreF .' C il fait '. $degreC .' F </p>';
        ?>
        <hr>
        <p><?= "Donne ton age !" ?></p>

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
            echo '<p> en ayant '. $age .' ans, vous êtes né entre '. $dateN .' et ' . $dateN + 1 .' </p>';

            ?>
        <hr>

<p><?= "Prix Hors Taxes, TVA et TTC" ?></p>

<?php $saisie2 = $_GET['saisie2'] ?? '0'; ?>
<form method="GET" action="<?=$_SERVER['PHP_SELF'] ?>">
    <input type="text" name="saisie2" value="<?= $saisie2 ?? '' ?>"/>
    <input type="submit" value="envoyer">
</form>

    <?php

    $age = $saisie2;
    const contTVA = (20/100);
    $dateN = (calcdate - $age);
    echo'<br>';
    echo '<p> en ayant '. $age .' ans, vous êtes né entre '. $dateN .' et ' . $dateN + 1 .' </p>';

    ?>



    </body>
</html>