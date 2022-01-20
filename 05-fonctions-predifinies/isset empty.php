            // Fonction isset() permet de tester l'existence
                // Elle renvoie true si la vairable existe
                // Elle renvoie false si la variable n'existe pas

            ///*
            //$message_erreur="";
            $message_erreur="Il y a eu une erreur";

            //echo $message_erreur;
            echo 'est-ce que $message_erreur est définie : ';
            var_dump(isset($message_erreur));
            echo '<br>';

            if (isset($message_erreur)){
                echo '$message_erreur : ' . $message_erreur . '<br>';
            }

            // Fonction empty() permet de tester si la variable est vide ou non
                // Renvoie 1 si la chaine de caractere est vide
                // False sinon

            echo 'est-ce que $message_erreur est vide : ';
            var_dump(empty($message_erreur));
            echo '<br>';
            //*/