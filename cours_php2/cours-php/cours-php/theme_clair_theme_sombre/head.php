<?php // ne pas oublier de mettre le require et le if en début de page
    require("traitement.php"); //récupération du fichier "traitement.php"

    if (isset($_GET['theme'])) {  // si 'theme' sélectionné, on active la fonction "retourCookieCss($_GET['theme'])"  
        retourCookieCss($_GET['theme']);
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Ressources Internet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Base d'une page</title>

        <?php
            $theme = cookieCSS(); // création de la variable $theme et on lui assigne la fonction cookieCSS()
        ?>

        <!-- link css en mettant la variable $thème dans le href -->
        <link rel="stylesheet" type="text/css" href="<?= $theme ?>"/>



         
    </head>
    <body>
        <header>
                <nav>
                    <ul class="menu">
                        <li><a href="index.php" title="">Home</a></li>
                        <li><a href="article.php" title="">article</a></li>
                        <li><a href="contact.php" title="">contact</a></li>
                        <li><a href="theme.php" title="">Thème</a></li>
                        <li><a href="deconnection.php" title="">Déconnexion</a></li>
                    </ul>
                </nav>
        </header>
