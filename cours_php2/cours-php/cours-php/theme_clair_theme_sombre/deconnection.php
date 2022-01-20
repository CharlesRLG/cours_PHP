<?php

setcookie('theme','',time() -60*60*24*400);
setcookie('fond','',time() -60*60*24*400);
header('refresh: 1; URL=index.php');

echo 'Déconnexion et redirection en cours ...';

?>

