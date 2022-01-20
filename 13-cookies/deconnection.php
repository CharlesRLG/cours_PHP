<?php

setcookie('langue','',time() - 60);
header('refresh: 1; URL=langue.php');

echo 'Déconnexion et redirection en cours ...';

if ($_COOKIE['fond']==='sombre'){ ?>

    <link rel="stylesheet" type="text/css" href="fond_sombre.css" /> 

<?php }else { ?>

    <link rel="stylesheet" type="text/css" href="fond_clair.css" /> 

<?php } 