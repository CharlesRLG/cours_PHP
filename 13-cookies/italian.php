<?php
setCookie("langue", "italien",time() + 60*60*24*90);
if ($_COOKIE['fond']==='sombre'){ ?>
    <link rel="stylesheet" type="text/css" href="fond_sombre.css" /> 
<?php }else { ?>
    <link rel="stylesheet" type="text/css" href="fond_clair.css" /> 
<?php }?>


<p>Je suis le site en Italien</p>
<a href="deconnection.php">chager les préférences de langue...</a>
