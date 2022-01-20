// strlen permet de connaitre la longueur d'une chaine de caractère
            $chaine = "Je te défie de compter mes caractères !";
            echo $chaine . '<br>';  
            echo strlen($chaine) . ' ' . mb_strlen($chaine) ."<br>";

            echo mb_substr( $chaine , 6 , 5 ) . '<br>';
