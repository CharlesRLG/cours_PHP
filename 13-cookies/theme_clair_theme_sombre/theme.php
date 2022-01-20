<?php

 const NOM_COOKIE_THEME = 'theme';

    function fonctionCSS() {
    $fichierCss = 'fond_clair.css';
    $valeurCookie = $_COOKIE[NOM_COOKIE_THEME] ?? ' ';
    switch($valeurCookie)
    {
        case 'sombre':
            $fichierCss = 'fond_sombre.css';
            break;
        case 'clair':
            $fichierCss = 'fond_clair.css';
            break;
    }
    return $fichierCss;
}

function fonctionReponseCss(string $theme) {
    setcookie(NOM_COOKIE_THEME, $theme, time() + 600);
    header('refresh: 0; URL=index.php'); // rafraichit la page !!
}

/*
    if (isset ($_get['theme'])) {
        setcookie ('theme',$_get['theme'], time ()+60);
    }
*/
?>


