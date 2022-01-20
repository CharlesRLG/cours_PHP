<?php 

        if (isset($_COOKIE["langue"])){
            $preferenceLangue = $_COOKIE["langue"];

            if ($preferenceLangue == "francais"){
                header("location:francais.php");
                exit();
            }elseif ($preferenceLangue == "anglais"){
                header("location:english.php");
                exit();
            }elseif ($preferenceLangue == "italien"){
                header("location:italian.php");
                exit();
            }

            // echo "Je sais que votre préférence est que le site soit en $preferenceLangue"; 
        }
        ?>
        <?php 
        if (isset($_COOKIE["fond"])){
            $preferenceFond = $_COOKIE["fond"];

            if ($preferenceFond == "sombre"){
                header("location:sombre.php");
                exit();
            }elseif ($preferenceFond == "clair"){
                header("location:clair.php");
                exit();
            }
        }

        ?>



<body id="hov">
    <p>page test choix de cookie langue</p>
    <br>
    <a href="francais.php">Francais</a>
    <a href="english.php">English</a>
    <a href="italian.php">Italien</a>
    <br>
    <a href="sombre.php">Sombre</a>
    <a href="clair.php">Clair</a>
</body>


