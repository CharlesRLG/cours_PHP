<meta charset="utf-8"/>

<?php
/*Exercice tableau

1- Indice : mois / Valeur (le nombre de jours)

2- Indice : noméro jour
   Valeur : nom (lundi,mardi,....)

3- Indice: nom du jour
   Valeur: numéro

*/
$mois = [
    'janvier' => 31,
    'février' => 29,
    'mars' => 31,
    'avril' => 30,
    'mai' => 31,
    'juin' => 30,
    'juillet' => 31,
    'aout' => 31,
    'septembre' => 31,
    'octobre' => 31,
    'novembre' => 31,
    'décembre' => 31,
];
echo '<pre>';
print_r($mois);
echo '</pre>';
//echo $mois['mars'] . '<br>';

foreach($mois as $cle => $valeur){
    echo "Le nombre de jours dans le mois de $cle est $valeur</p>";
}

$jour = [
    1 => 'lundi',
    2 => 'mardi',
    3 => 'mercredi',
    4 => 'jeudi',
    5 => 'vendredi',
    6 => 'samedi',
    7 => 'dimanche',
];

echo '<pre>';
print_r($jour);
echo '</pre>';

foreach($jour as $cle => $valeur){
    echo "<p>Le jour $cle est $valeur</p>";
}

$flipped = array_flip($jour);
echo '<pre>';
print_r($flipped);
echo '</pre>';

foreach($flipped as $cle => $valeur){
    echo "<p>$cle est le jour $valeur</p>";
}

echo"<pre>";
$x = 1.1 * 10 ** 400;
var_dump($x);
$y = -1.1 * 10 ** 400;
var_dump($y);
$z = $x +$y;
var_dump($z);

echo 'analyse $x<br>';
var_dump(is_finite($x));
var_dump(is_infinite($x));
var_dump(is_nan($x));

echo 'analyse $y<br>';
var_dump(is_finite($y));
var_dump(is_infinite($y));
var_dump(is_nan($y));

echo 'analyse $z<br>';
var_dump(is_finite($z));
var_dump(is_infinite($z));
var_dump(is_nan($z));

// $x1 = 1 * 0 ;
// var_dump($x1);
// $x2 = -1 * 0;
// var_dump($y1);

// echo 'analyse $x<br>';
// var_dump(is_finite($x));
// var_dump(is_infinite($x));
// var_dump(is_nan($x));

echo "</pre>";

function tabToHtml($tableau, $titrescol) {
    // Adapter le code de cette fonction
    //   avec un tableau HTML 
    //   balises à utiliser : <table> <tr> <th> <td>

    echo '<table>';
    echo '<tr>';

    foreach ($titrescol as $titrecol) 
    {
        echo "<th>$titrecol</th>";
    }

    echo '</tr>';
   // echo $titreCol1 . ' ' . $titreCol2 . '<br>';
 
    foreach($tableau as $cle => $valeur) 
    {
        //echo $cle . ' : ' . $valeur . '<br>';
        echo "<tr><td>$cle</td><td>$valeur</td></tr>";
    }
    echo '</table>';
}
tabToHtml($flipped,['Nom','Numéro']);

?>