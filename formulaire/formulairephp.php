<?php

$pseudo="";
$mdp="";
$confmdp="";


const HTTP_UNPROCESS_ENTITY = 422;

if (!empty($_GET)){
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    


if ($mdp==$confmdp){
     if(!empty($pseudo)) echo "Bonjour $pseudo" ;
}
    
}

?>


