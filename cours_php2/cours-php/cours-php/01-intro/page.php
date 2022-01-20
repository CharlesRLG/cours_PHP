<?php 
    echo "<p>PHP Hello World !</p>"; // Commentaire sur une ligne
    /* Ceci est un commentaire
    Qui peut être sur plusieurs lignes */

    //phpinfo();
?>



<!DOCTYPE html>
<html lang="<?="fr"?>">

    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <p>HTML Hello World !</p>
        <p><?= "cominer PHP avec HTML<br>" ?></p>
        <?= "Salut <br>"; ?> 
        <!-- Cette façon d'écrire permet de faire un echo plus simplement -->
        <?php 
        echo "Salut <br>";  
        echo "L'instruction echo permet d'afficher du texte";
        ?>
    </body>
</html>




