<?php    setCookie("langue", "francais",time() + 60*60*24*90);

    if ($_COOKIE['fond']==='sombre'){ ?>

        <link rel="stylesheet" type="text/css" href="fond_sombre.css" /> 

    <?php }else { ?>

        <link rel="stylesheet" type="text/css" href="fond_clair.css" />

    <?php } ?>


<p>Je suis le site en francais</p>
<a href="deconnection.php">chager les préférences de langue...</a>