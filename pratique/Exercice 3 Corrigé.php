<?php
/* balise html ... */

// Compléter le programme suivant qui doit afficher le numéro du mois et le nombre de jour de chaque mois de l'année (sans année bissextile)  . Les clefs de ce tableau  sont les noms des mois de l'année. .

$mois = array(
     'Janvier'  => array('numéro' => 1, 'jour'=> 31),
     'Février'  => array('numéro' => 2, 'jour'=> 28),
     'Mars'     => array('numéro' => 3, 'jour'=> 31),
     'Avril'    => array('numéro' => 4, 'jour'=> 30),
     'Mai'      => array('numéro' => 5, 'jour'=> 31),
     'Juin'     => array('numéro' => 6, 'jour'=> 30),
     'Juillet'  => array('numéro' => 7, 'jour'=> 31),
     'Août'     => array('numéro' => 8, 'jour'=> 31),
     'Septembre'=> array('numéro' => 9, 'jour'=> 30),
     'Octobre'  => array('numéro' => 10, 'jour'=> 31),
     'Novembre' => array('numéro' => 11, 'jour'=> 30),
     'Décembre' => array('numéro' => 12, 'jour'=> 31),
);

foreach ( $mois as $nom => $infos    )
    {
      echo  "Voici les informations pour le mois de $nom<br>"   ;
      
      echo "Numéro " . $infos['numéro'] . ' nbJours ' . $infos['jour'];
      /* foreach ( $infos as $cle => $valeur  )
        {
            echo "$cle $valeur<br>";
       }*/
       echo "<br>";
    }
 

/* balise html ... */