<?php

$pseudo="";
$mdp="";
$confmdp="";
$afficherFormulaire = true;
const HTTP_UNPROCESS_ENTITY = 422;

if (!empty($_GET)){

    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    $erreurs = [] ;
    
    if (null == (filter_input(INPUT_GET, 'pseudo'))){
        $erreurs[] = 'Veuillez indiquer votre pseudo' ;
    }

    
    if(!isset($_GET["pseudo"])) {
        $erreurs[] = 'Veuillez indiquer votre pseudo' ;
        
    }
    require 'formulaire.inc.php';

    if (null == (filter_input(INPUT_GET, 'mdp'))){
        $erreurs[] = 'Veuillez indiquer votre mot de passe' ;
    }
    /*
    if(!isset($_GET["mdp"])) {
        $erreurs[] = 'Veuillez indiquer votre mot de passe' ;
    }
    */
    if (null == (filter_input(INPUT_GET, 'confmdp'))){
        $erreurs[] = 'Veuillez resaisir votre mot de passe pour la vérification' ;
    }
    /*
    if(!isset($_GET["confmdp"])) {
        $erreurs[] = 'Veuillez resaisir votre mot de passe pour la vérification' ;
    }
    */
    if ($_GET["mdp"] !== $_GET["confmdp"]) {
        $erreurs[] = 'Pseudo ou mot de passe erroné' ;
    }


    if(!isset($_GET["OS_favori"])) {
        $erreurs[] = 'Veuillez indiquer votre OS favori' ;
    }

    if(!isset($_GET["possession"])) {
        $erreurs[] = 'Veuillez indiquer votre possession' ;
    }

    if(!isset($_GET["Profession"])) {
        $erreurs[] = 'Veuillez indiquer votre Profession' ;
    }

    $pseudo = filter_input(
        INPUT_GET,'pseudo',FILTER_SANITIZE_STRING );

    $mdp = filter_input(
        INPUT_GET,'mdp',FILTER_SANITIZE_STRING);

    $OS_favori = $_GET["OS_favori"] ??''; 
    if(!in_array($OS_favori,['Win','Win_ant','MAC','Linux','Autre','silex',''], true)) {
        
        http_response_code(HTTP_UNPROCESS_ENTITY);
        echo 'Valeur OS_favori incorrecte, code' . 
            http_response_code();
        die();
    }

    $possession = $_GET["possession"] ??''; 
    if(!in_array($possession,['ordi_bureau','Portable','netbook','PAD','mur',''], true)) {
        
        http_response_code(HTTP_UNPROCESS_ENTITY);
        echo 'Valeur possession incorrecte, code' . 
            http_response_code();
        die();
    }

    $Profession = $_GET["Profession"] ??''; 
    if(!in_array($Profession,['chomeur','etudiant','fonctionnaire','prive','retraite','neandertalien',''], true)) {
        
        http_response_code(HTTP_UNPROCESS_ENTITY);
        echo 'Valeur Profession incorrecte, code' . 
            http_response_code();
        die();
    }

    $afficherFormulaire = count($erreurs) > 0;   
}

    ?>
    <div style="color:red">
    <?php if(!empty ($erreurs)) 
        foreach ($erreurs as $erreur) {
        echo $erreur . '<br>';
    } ?>
    </div>
    
    <?php if(!empty ($erreurs)) {
            $pseudo = '';
            $OS_favori = '';
            $possession = '';
            $Profession = '';
    }
    ?>

    <a href="http://localhost/cours-php/cours-php/html20211122formulaire/exercire_formulaire_arefaire.html">Retour formulaire</a>
    
    
        <p><?php if(!empty($pseudo)) echo "Bonjour $pseudo" ?></p>

        <?php
        if (isset($OS_favori) AND $OS_favori=="Win")
        { 
            echo "Bienvenue sur windows<br/>"; 
        }
        if (isset($OS_favori) AND $OS_favori=="Win_ant")
        { 
        echo "Bienvenue sur un vieu windows<br/>";
        }
        if (isset($OS_favori) AND $OS_favori=="MAC")
        { 
            echo "Bienvenue sur un MAC<br/>";  
        }
        if (isset($OS_favori) AND $OS_favori=="Linux")
        { 
            echo "Bienvenue sur un Linux<br/>";  
        }
        if (isset($OS_favori) AND $OS_favori=="silex")
        { 
            echo "Lachez ce caillou !<br/>";  
        }
        if (isset($OS_favori) AND $OS_favori=="Autre")
        { 
            echo "Bienvenue sur ce truc !<br/>";  
        }
        ?>
        <br>

         <?php
        if (isset($possession) AND $possession=="ordi_bureau")
        { 
            echo "Vous utilisez un ordinateur de bureau<br/>"; 
        }
        if (isset($possession) AND $possession=="Portable")
        { 
        echo "Vous utilisez un ordinateur portable<br/>";
        }
        if (isset($possession) AND $possession=="netbook")
        { 
            echo "Vous utilisez un netbook<br/>";  
        }
        if (isset($possession) AND $possession=="PAD")
        { 
            echo "Vous utilisez un PAD<br/>";  
        }
        if (isset($possession) AND $possession=="mur")
        { 
            echo "Vous utilisez un mur<br/>";  
        }
        ?>
        <br>

        <?php
        if (isset($Profession) AND $Profession=="chomeur")
        { 
            echo "Vous êtes chomeur<br/>"; 
        }
        if (isset($Profession) AND $Profession=="etudiant")
        { 
            echo "Vous êtes étudiant<br/>";
        }
        if (isset($Profession) AND $Profession=="fonctionnaire")
        { 
            echo "Vous êtes fonctionnaire<br/>";  
        }
        if (isset($Profession) AND $Profession=="prive")
        { 
            echo "Vous êtes privé<br/>";  
        }
        if (isset($Profession) AND $Profession=="retraite")
        { 
            echo "Vous êtes retraité<br/>";  
        }
        if (isset($Profession) AND $Profession=="neandertalien")
        { 
            echo "Vous êtes un néandertal<br/>";  
        }
    
        ?>

