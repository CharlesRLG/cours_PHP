<?php

 const choix_theme = 'theme';  // création de la constante 'theme'

    function cookieCSS() { // création de la fonction cookieCSS

    $fichierCss = 'fond_clair.css';   //mis en place du fichier fond_clair.css comme css de base
    $valeurCookie = $_COOKIE[choix_theme] ?? ' ';


    switch($valeurCookie)            
    {
        // switch fichier css
        case 'sombre':
            $fichierCss = 'fond_sombre.css';
            break;
        case 'clair':
            $fichierCss = 'fond_clair.css';
            break;
        default: 'fond_clair.css';
            
    }
    return $fichierCss;

}
// création de la fonction retourCookieCss
function retourCookieCss(string $theme) {
    //création du cookie choix thème
    setcookie(choix_theme, $theme, time() + 600);
    header('refresh: 0; URL=theme.php');                     // rafraichit la page !!

}

?>