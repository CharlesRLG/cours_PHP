<?php 
$action = filter_var($_SERVER['PHP_SELF'], FILTER_VALIDATE_URL);

$saisie = $_GET['saisie'] ?? '-1';
$couleur = $saisie;

$couleurValide = false; /* remplacer par une expression booléenne
                        la couleur doit être vert/orange/rouge */
$couleurValide = $couleur == 'orange' || $couleur == 'vert' || $couleur == 'rouge';

echo('$couleurValide='); var_dump($couleurValide); echo '<br>';
?>
    <form method="GET" action="<?= $action ?>">
        <label for="saisie">Couleur</label>
        <input type="text" name="saisie" value="<?= $saisie ?? '' ?>"/>
        <input type="submit" value="envoyer">
    </form>
<br>

<?php echo'<p>entrer un nombre</p>'; ?>
<?php $saisie2 = $_GET['saisie2'] ?? '0'; ?>
<form method="GET" action="<?=$_SERVER['PHP_SELF'] ?>">
<input type="number" name="saisie2" value="<?= $saisie2 ?? '' ?>"/>
<input type="submit" value="envoyer">
</form>

<?php
$n = intval($saisie2);


$nValide = !($n >= 1 && $n <= 20);
echo('nValide :'); var_dump($nValide); echo '<br>';
?>

<pre>
<?php

// $deuxEgales = ($v1 == $v2) || ($v1 == $v3) || ($v2 == $v3);
// $deuxEgales = ($v1 == $v2) || ($v1 == $v3) || ($v2 == $v3);


$v1=1; $v2=1; $v3=1; $attendu = true; 
$deuxEgales = ($v1 == $v2) || ($v1 == $v3) || ($v2 == $v3);
echo "\$v1=$v1 \$v2=$v2 \$v3=$v3 \$attendu=$attendu \$deuxEgales=$deuxEgales<br>";

$v1=1; $v2=1; $v3=2; $attendu = true; 
$deuxEgales = ($v1 == $v2) || ($v1 == $v3) || ($v2 == $v3);
echo "\$v1=$v1 \$v2=$v2 \$v3=$v3 \$attendu=$attendu \$deuxEgales=$deuxEgales<br>";

$v1=1; $v2=1; $v3=3; $attendu = true; 
$deuxEgales = ($v1 == $v2) || ($v1 == $v3) || ($v2 == $v3);
echo "\$v1=$v1 \$v2=$v2 \$v3=$v3 \$attendu=$attendu \$deuxEgales=$deuxEgales<br>";

$v1=1; $v2=2; $v3=1; $attendu = true; 
$deuxEgales = ($v1 == $v2) || ($v1 == $v3) || ($v2 == $v3);
echo "\$v1=$v1 \$v2=$v2 \$v3=$v3 \$attendu=$attendu \$deuxEgales=$deuxEgales<br>";

$v1=1; $v2=2; $v3=2; $attendu = true; 
$deuxEgales = ($v1 == $v2) || ($v1 == $v3) || ($v2 == $v3);
echo "\$v1=$v1 \$v2=$v2 \$v3=$v3 \$attendu=$attendu \$deuxEgales=$deuxEgales<br>";

$v1=1; $v2=2; $v3=3; $attendu = false; 
$deuxEgales = ($v1 == $v2) || ($v1 == $v3) || ($v2 == $v3);
echo "\$v1=$v1 \$v2=$v2 \$v3=$v3 \$attendu=$attendu \$deuxEgales=$deuxEgales<br>";

$v1=2; $v2=1; $v3=1; $attendu = true; 
$deuxEgales = ($v1 == $v2) || ($v1 == $v3) || ($v2 == $v3);
echo "\$v1=$v1 \$v2=$v2 \$v3=$v3 \$attendu=$attendu \$deuxEgales=$deuxEgales<br>";

$v1=2; $v2=1; $v3=2; $attendu = true; 
$deuxEgales = ($v1 == $v2) || ($v1 == $v3) || ($v2 == $v3);
echo "\$v1=$v1 \$v2=$v2 \$v3=$v3 \$attendu=$attendu \$deuxEgales=$deuxEgales<br>";

$v1=2; $v2=1; $v3=3; $attendu = false; 
$deuxEgales = ($v1 == $v2) || ($v1 == $v3) || ($v2 == $v3);
echo "\$v1=$v1 \$v2=$v2 \$v3=$v3 \$attendu=$attendu \$deuxEgales=$deuxEgales<br>";

$v1=2; $v2=2; $v3=1; $attendu = true; 
$deuxEgales = ($v1 == $v2) || ($v1 == $v3) || ($v2 == $v3);
echo "\$v1=$v1 \$v2=$v2 \$v3=$v3 \$attendu=$attendu \$deuxEgales=$deuxEgales<br>";

$v1=2; $v2=2; $v3=2; $attendu = true; 
$deuxEgales = ($v1 == $v2) || ($v1 == $v3) || ($v2 == $v3);
echo "\$v1=$v1 \$v2=$v2 \$v3=$v3 \$attendu=$attendu \$deuxEgales=$deuxEgales<br>";

$v1=2; $v2=2; $v3=3; $attendu = true; 
$deuxEgales = ($v1 == $v2) || ($v1 == $v3) || ($v2 == $v3);
echo "\$v1=$v1 \$v2=$v2 \$v3=$v3 \$attendu=$attendu \$deuxEgales=$deuxEgales<br>";

$v1=3; $v2=1; $v3=1; $attendu = true; 
$deuxEgales = ($v1 == $v2) || ($v1 == $v3) || ($v2 == $v3);
echo "\$v1=$v1 \$v2=$v2 \$v3=$v3 \$attendu=$attendu \$deuxEgales=$deuxEgales<br>";

$v1=3; $v2=1; $v3=2; $attendu = false; 
$deuxEgales = ($v1 == $v2) || ($v1 == $v3) || ($v2 == $v3);
echo "\$v1=$v1 \$v2=$v2 \$v3=$v3 \$attendu=$attendu \$deuxEgales=$deuxEgales<br>";

$v1=3; $v2=1; $v3=3; $attendu = true; 
$deuxEgales = ($v1 == $v2) || ($v1 == $v3) || ($v2 == $v3);
echo "\$v1=$v1 \$v2=$v2 \$v3=$v3 \$attendu=$attendu \$deuxEgales=$deuxEgales<br>";

$v1=3; $v2=2; $v3=1; $attendu = false; 
$deuxEgales = ($v1 == $v2) || ($v1 == $v3) || ($v2 == $v3);
echo "\$v1=$v1 \$v2=$v2 \$v3=$v3 \$attendu=$attendu \$deuxEgales=$deuxEgales<br>";

$v1=3; $v2=2; $v3=2; $attendu = true; 
$deuxEgales = ($v1 == $v2) || ($v1 == $v3) || ($v2 == $v3);
echo "\$v1=$v1 \$v2=$v2 \$v3=$v3 \$attendu=$attendu \$deuxEgales=$deuxEgales<br>";

$v1=3; $v2=2; $v3=3; $attendu = true; 
$deuxEgales = ($v1 == $v2) || ($v1 == $v3) || ($v2 == $v3);
echo "\$v1=$v1 \$v2=$v2 \$v3=$v3 \$attendu=$attendu \$deuxEgales=$deuxEgales<br>";

?>
</pre>

