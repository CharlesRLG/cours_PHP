<?php
require('theme.php');

if (isset($_GET['theme'])) {
    fonctionReponseCss($_GET['theme']);
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


        <title>Base d'une page</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        
        <link rel="icon" type="image/png" href="assets/img/favicon.png" />

        <?php $theme = fonctionCSS(); ?>
        <link rel="stylesheet" type="text/css" href="fond_clair.css" />
        <link rel="stylesheet" type="text/css" href="<?= $theme ?>" />



         
    </head>
