<pre>
<?php
$mois = [
    'janvier' => 31, 
    'février' => 28, 
    'mars' => 31, 
    'avril' => 30, 
    'mai' => 31, 
    'juin' => 30, 
    'juillet' => 31, 
    'août' => 31, 
    'septembre' => 30, 
    'octobre' => 31, 
    'novembre' => 30, 
    'décembre' => 31, 
];
echo '$mois ';
print_r($mois);


$mois2['janvier'] = 31;
$mois2['février'] = 28; 
$mois2['mars'] = 31;
$mois2['avril'] = 30;
$mois2['mai'] = 31;
$mois2['juin'] = 30;
$mois2['juillet'] = 31; 
$mois2['août'] = 31;
$mois2['septembre'] = 30;
$mois2['octobre'] = 31;
$mois2['novembre'] = 30;
$mois2['décembre'] = 31;

echo '$mois2 ';
print_r($mois2);

$numNomJour = [
    0 => 'lundi',
    1 => 'mardi',
    2 => 'mercredi',
    3 => 'jeudi',
    4 => 'vendredi',
    5 => 'samedi',
    6 => 'dimanche',
];
echo '$numNomJour ';
print_r($numNomJour);
$numNomJour2[] = 'lundi';
$numNomJour2[] = 'mardi';
$numNomJour2[] = 'mercredi';
$numNomJour2[] = 'jeudi';
$numNomJour2[] = 'vendredi';
$numNomJour2[] = 'samedi';
$numNomJour2[] = 'dimanche';
echo '$numNomJour2 ';
print_r($numNomJour2);

$nbJour = 0;
$numNomJour3[$nbJour++] = 'lundi';
$numNomJour3[$nbJour++] = 'mardi';
$numNomJour3[$nbJour++] = 'mercredi';
$numNomJour3[$nbJour++] = 'jeudi';
$numNomJour3[$nbJour++] = 'vendredi';
$numNomJour3[$nbJour++] = 'samedi';
$numNomJour3[$nbJour++] = 'dimanche';
echo '$numNomJour3 ';
print_r($numNomJour3);

$nomNumJour = array_flip($numNomJour);
echo '$nomNumJour ';
print_r($nomNumJour);

function tabToHtml($tableau, $titreCol1, $titreCol2) {
    // Adapter le code de cette fonction
    //   avec un tableau HTML 
    //   balises à utiliser : <table> <tr> <th> <td>
    echo '<pre>';
    echo $titreCol1 . ' ' . $titreCol2 . '<br>';
    foreach($tableau as $cle => $valeur) 
    {
        echo $cle . ' : ' . $valeur . '<br>';
    }
    echo '</pre>';
}
tabToHtml($nomNumJour,'Nom','Numéro');


?>
</pre>
