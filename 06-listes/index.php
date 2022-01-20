<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Ressources Internet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Les listes en PHP</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images\favicon.png" />
        
        <link rel="stylesheet" type="text/css" href="css\style.css" />    
         
    </head>
    <body>
        <?php
        /*
            // 2 façons de creer une liste
            $listePrenom1 = array("Myckael", "Antoine", "Samir", "Jean-Christophe", "Evan");
            $listePrenom2 = ["Christiane", "David", "Sarah", "Lucia", "Alexis"];
        */

        /*
            // 2 façons de visualiser une liste (pour dev)
            echo "<pre>";
            print_r($listePrenom1);
            echo "</pre>";

            echo "<pre>";
            var_dump($listePrenom2);
            echo "</pre>";
            
           
            //2 façons d'ajouter un élément a la fin d'une liste
            $listePrenom2[] = "Cecilia";
            array_push($listePrenom2, "Lucia", "Khalid"); // pour empliler
            array_pop($listePrenom2, "Lucia", "Khalid"); // pour enlever en commençant par le dernier empilé
        */


           /*
            echo "<pre>";
            print_r($listePrenom2);
            echo "</pre>";
            
            // Appeler un élément d'une liste

            echo $listePrenom2[1];
        */    
            // Tableau associatif
        /*
            $color = ['Rouge' => 'ff0000', 
                        'Vert' => '00ff00', 
                        'Bleu' => '0000ff', 
                        'Noir' => '000000', 
                        'Blanc' => 'ffffff'];
            echo '<pre>';
            print_r($color);
            echo '</pre>';
            echo $color['Vert'];

            foreach($color as $cle => $valeur){
                echo '<p style="background: #f0f0f0; color: #' .$valeur . '; ">';
                echo "Le code hexadecimal de $cle est $valeur</p>";
            }
        */
            // Parcourir une liste avec une boucle for
            // A l'aide d'une boucle, parcourez tout les éléments de la liste $listePrenom1

            // count($list) -> Permet de savoir combien d'élément possède la liste
            // sizeof($list) -> Permet de savoir combien d'élément possède la liste

/*
            echo "<p>$listePrenom1[0]</p>";
            echo "<p>$listePrenom1[1]</p>";
            echo "<p>$listePrenom1[2]</p>";
            echo "<p>$listePrenom1[3]</p>";
            echo "<p>$listePrenom1[4]</p>";
           
            echo "Table de 7",'<br>';
            for($i = 1 ; $i <=10 ; $i++) {
                echo $i,' ',7*$i,'<br>';
            }

            */
/*
            for($i=0;
                $i < count($listePrenom1);
                $i++)
            {
                echo "<p>$listePrenom1[$i]</p>";

            }


           
            
            for($i=0;$i<count($listePrenom2);$i++){
                echo "<p>$listePrenom2[$i]</p>";

            }

            

            // La boucle foreach

            $color = ["Rouge" => "ff0000", "Vert" => "00ff00", "Bleu" => "0000ff", "Noir" => "000000", "Blanc" => "ffffff"];

            foreach($color as $cle => $valeur){
                echo "<p>Le code hexadecimal de $cle est $valeur</p>";
            }


            die();



*/
        ?>
        <?php
        /*Les tableaux php regroupent plusieurs fonctions:
        -les tableaux
        -les listes
        -les dictionnaires
        -les pils/ les files

        les tableaux php : https://www.php.net/manual/fr/language.types.array.php
                           https://www.php.net/manual/fr/book.array.php

        Les fonctions tableaux : https://www.php.net/manual/fr/ref.array.php
        */

        /*
        /*Utilisation du tableau comme dictionnaire*/

        // $livre1 ['titre']= 'Harry Potter';
        // $livre1 ['auteur']= 'J.K. Rowling';
        // $livre1 ['ISBN']= '#72';
        // echo '<pre>' ; print_r($livre1); echo '</pre>';
        
        /*Utilisation du tableau comme dictionnaire*/
        // $livre2 ['titre']= 'Choupi';
        // $livre2 ['auteur']= 'T. Courtin';
        // $livre2 ['ISBN']= '#13';
        // echo '<pre>' ; print_r($livre2); echo '</pre>';
        
            /* Utilisation du tableau comme liste */
            // Création d'une liste vide
            // $livres = []; // syntaxe alternative : $livres = array();
            //Ajout d'un élément dans la liste
            // $livres[] = $livre1;
            // $livres[] = $livre2;
            //echo '<pre>'; print_r($livres); echo '</pre>';
            
            /*Tableaux (liste) indicé:*/

            /* 
            taille du tableau : n+1 (le 0 compte)
            indice du dernier élément: taille-1

            */

            /*
            echo 'Premier livre:';
            echo '<pre>'; print_r($livre[0]);echo '</pre>';
            echo 'Second livre:';
            echo '<pre>'; print_r($livre[1]);echo '</pre>';
            */

            /*
            echo 'auteur du 1er livre :' .
                $livres[0]['auteur'] . '<br>';

            echo 'auteur du 2ème livre :' .
                $livres[1]['auteur'] . '<br>';
            */

            /*
            echo 'Nombre d\'éléments dans le tableau :' .
            count($livres) . '<br>';

            echo 'Nombre d\'éléments dans un livre :' .
            count($livres[0]) . '<br>';
            */
            
            // $color = ['Rouge' => 'ff0000', 
            // 'Vert' => '00ff00', 
            // 'Bleu' => '0000ff', 
            // 'Noir' => '000000', 
            // 'Blanc' => 'ffffff'];
            // echo '<pre>';
            // print_r($color);
            // echo '</pre>';
            // echo $color['Vert'];

            // foreach($color as $cle => $valeur){
            // echo '<p style="background: #f0f0f0; color: #' .$valeur . '; ">';
            // echo "Le code hexadecimal de $cle est $valeur</p>";



            // echo '<pre>array_keys : clés';
            // print_r(array_keys($color));
            // echo '</pre>';

            // echo '<pre>array_values : valeur';
            // print_r(array_values($color));
            // echo '</pre>';

            // echo '<pre>asort : tri sur les valeurs';
            // asort($color);
            // print_r($color);
            // echo '</pre>';

            // echo '<pre>ksort : tri sur les clés';
            // ksort($color);
            // print_r($color);
            // echo '</pre>';

            // $colors2 = [
            //     'Gris1' => '020202',
            //     'Gris2' => 'AAAAAA',
            //     'Gris3' => 'f0f0f0',
            // ];

            // $couleurs = array_merge($color,$gris);
            // foreach($couleurs as $cle => $valeur){
            //     echo '<p style="background: #f0f0f0; color: #' . $valeur;
            //     echo "Le code hexadecimal de $cle est $valeur</p>";
            // }
            
            /* 
            Pour avoir le code ou le caractère

            mb_ord(caratère)=>code
            mb_chr(code)=>caractère


            Pour avoir la longueur d'une chaine de caractère

            mb_strlen(<chaine>)=>longueur
            

            Pour retirer les espace avant et après une chaine

            mb_trim (chaine)=> retire les espace avant et après la chaine
            

            Pour mettre tous les caractère en maj

            mb_strtoupper(chaine)=>tous les caractère en maj


            Pour mettre tous les caractère en min

            mb_strtolower(chaine)=>tous les caractère en min


            Pour trouver une sous-chaine

            mb_strstr(chaine)=> trouver la sous chain
            

            Pour remplacer toutes les occurrences dans une chaîne

            str-replace=>Remplace toutes les occurrences dans une chaîne
            */
            /*
                Pour créer un tableau vide

                $a = []; ou = array();

                pour créez un dictionnaire ou tableau associatif

                $a['auteur']= ....;
                $a['titre']=.....;

                ou 

                $a = ['auteur'=> '...',
                      'titre' => '...',
                     ];

                foreach ($a as $key => $valeur) {
                    echo $key . ' ' . $valeur;
                }

                Pour les tableau indicé

                $nb=count($tableau); // compte le nombre d'éléments dans le taleau voulu
                                     // jusqu'à nb-1, puisqu'on démarre du 0.
                

                Ajouter un élément dans un tableau.

                $tableau[] = 'valeur';

                        ou  

                $tableau [$nb++] = 'valeur';


                exemple particulier en fonction de la position du $n et du ++ :

                $n = 5;
                echo($n++); //affichera 5
                echo ($n); //affichera 6
                echo(++$n); //affichera 7
                echo($n); //affichera 7
            */

        ?>
    </body>
</html>