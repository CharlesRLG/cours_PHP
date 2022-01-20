<?php
    $i = 49;
    $j = 49;

    echo '$i = ' . $i . '<br>';

    $i++;
    echo 'après $i++   $i =' . $i . '<br>';

    $j--;
    echo 'après $j++   $j =' . $j . '<br>';

    echo ' La boucle pour permet de compter<br>';
    for($i=1; $i<=10;$i++)
    echo 5*$i . ' ';
    echo '<br>décompte avec boucle pour<br>';
    for($j=10;$j>=0;$j--)
    echo $j . ' ';
?>