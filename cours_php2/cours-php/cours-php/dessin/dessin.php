<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8">

<title>Dessin</title>
<link rel="icon" href="data:;base64,iVBORw0KGgo=">
<?php
$dessin = $_GET['dessin'] ?? '';

switch($dessin) {
	case 'ligne': ?>
<pre>
Ligne de X
	Demander le nombre de X et afficher
	Largeur de la ligne : 12
	XXXXXXXXXXXX
	<br>
	<a href='dessin_formulaire.php'>Changer de dessin</a>
</pre><hr>
<?php
	$nb = intval($_GET['nb'] ?? 12);

	'Nombre de X demandés : ' . $nb;
		
	for ($i=0; $i<$nb ; $i++) {
		echo 'X';
	}

?>

<?php	
		break;
	case 'rect': ?>
	<pre>
Rectangle
	Largeur du rectangle : 12 &lt;-
	Hauteur du rectangle : 3 &lt;-
	XXXXXXXXXXXX
	XXXXXXXXXXXX
	XXXXXXXXXXXX
	<br>
	<a href='dessin_formulaire.php'>Changer de dessin</a>
</pre><hr>

<?php
	$nbL = intval($_GET['largeur'] ?? 12);
	$nbh = intval($_GET['hauteur'] ?? 3);

	for ($i=0; $i < $nbh ; $i++) {
		
		

		for($j=0 ; $j < $nbL ; $j++)
		{
			echo "X";

		}echo "<br>";
	}
?>

<?php	
		break;
	case 'tri1': ?>
	<pre>	
Triangle 1
	Hauteur du triangle : 5 &lt;-
	X
	XX
	XXX
	XXXX
	XXXXX
	<br>
	<a href='dessin_formulaire.php'>Changer de dessin</a>
</pre><hr>
<?php
	

	$nb = intval($_GET['hauteur'] ?? 5);
	  
	for ($i = 0; $i < $nb; $i++)
	{
		
		for($j = 0; $j<$i; $j++)
		{
			echo "X";
		}
	echo "<br />";
	}
	
?>
<?php
		break;
	case 'tri2': ?>
<pre>	
Triangle 2
	X
	XXX
	XXXXX
	XXXXXXX
	XXXXXXXXX
	<br>
	<a href='dessin_formulaire.php'>Changer de dessin</a>
</pre><hr>
<?php
	

	$nb = intval($_GET['hauteur'] ?? 12);
	  
	for ($i = 0; $i < $nb; $i +=2)
	{
		
		for($j = 0; $j<$i; $j++)
		{
			echo "X";
		}
	echo "<br />";
	}
	
?>
<?php
		break;
	case 'toit': ?>
<pre>	
Toit
	Largeur du dessin : 18 &lt;-
	Position du toit : 3 &lt;-
	Hauteur du toit : 7 &lt;-
	---------X--------
	--------XXX-------
	-------XXXXX------
	------XXXXXXX-----
	-----XXXXXXXXX----
	----XXXXXXXXXXX---
	---XXXXXXXXXXXXX--

	Indications
		● Utilisez une variable pour le nombre de tirets à gauche du toit et une autre pour le nombre de tirets à droite.
		● On remarque que d'une ligne à la suivante, le nombre de tirets à gauche et à droite diminue de 1, alors que le nombre de X augmente de 2.
		● Tout dépend donc du nombre de tirets à gauche et à droite sur la première ligne. On peut les calculer à partir des variables Position, Hauteur et Largeur.
		<br>
		<a href='dessin_formulaire.php'>Changer de dessin</a>
</pre><hr>
<pre>
<?php
	$largeur = intval($_GET['largeur'] ?? 1);
	$position = intval($_GET['position'] ?? 1); // alignement du toit
	$hauteur = intval($_GET['hauteur'] ?? 1);
	

	for ($h = 0; $h < $hauteur; $h++) {
		for($l = 0; $l < $hauteur - $h + $position - 1; $l++) {
			echo "-";
		}
		for ($l = 0; $l < $h * 2 + 1; $l++) {
			echo "X";
		}
		for($l = 0; $l < $hauteur - $h + 1; $l++) {
			echo "-";
		}
	echo "<br />";
	}
	break;
?>
</pre>
<?php
		break;
	case 'mais': ?>
<pre>		
Maison
	Largeur du dessin : 30 &lt;-
	Position de la maison : 10 &lt;-
	Hauteur de la masion : 12 &lt;-
	Hauteur des murs : 4 &lt;-
	-----------------X------------
	----------------XXX-----------
	---------------XXXXX----------
	--------------XXXXXXX---------
	-------------XXXXXXXXX--------
	------------XXXXXXXXXXX-------
	-----------XXXXXXXXXXXXX------
	----------XXXXXXXXXXXXXXX-----
	----------XXXXXXXXXXXXXXX-----
	----------XXXXXXXXXXXXXXX-----
	----------XXXXXXXXXXXXXXX-----
	----------XXXXXXXXXXXXXXX-----
	
	Il y a ici quatre données:
		– la largeur du dessin (nombre total de caractères dans une ligne du rectangle). Cette donnée est stockée dans la variable Largeur.
		– position de la maison (nombre de tirets à gauche des murs). Cette donnée est stockée dans la variable Position.
		– Hauteur de la maison = nombre de lignes du dessin. Cette donnée est stockée dans la variable Hauteur.
		– Hauteur des murs = nombre de lignes situées sous le toit. Cette donnée est stockée dans la variable HauteurMur.
		<br>
		<a href='dessin_formulaire.php'>Changer de dessin</a>
</pre>
<pre>
<?php
$largeur = 80;
$hauteurMaison = intval($_GET['hauteurMaison'] ?? 1);
$hauteurMur = intval($_GET['hauteurMur'] ?? 1);
$position = intval($_GET['position'] ?? 1);
$tg = $position + $hauteurMaison - $hauteurMur;
$td = $largeur - $tg - 1;
for ($hma = 0; $hma < $hauteurMaison - $hauteurMur; $hma++) { // hauteur Maison :  Nombre de lignes dans le dessin => Ok !
echo '    ';
for ($l = 0; $l < $tg; $l++) { // Hauteur de mur : Nombre lignes sous le toit => pas ok
	echo "-";
}
for ($l = 0; $l < $hma * 2 + 1; $l++) {
	echo "X";
}
for ($l = 0; $l < $td; $l++) {
	echo "-";
}
$tg--;
$td--;
echo "<br/>";
}
$hma = $hauteurMaison - $hauteurMur;
$tg++;
$td++;
for ($a = 0; $a < $hauteurMur - 1; $a++) {
echo '    ';
for ($l = 0; $l < $tg; $l++) {
	echo "-";
}
for ($l = 0; $l < $hma * 2 - 1; $l++) {
	echo "X";
}
for ($l = 0; $l < $td; $l++) {
	echo "-";
}
echo "<br/>";
}

}	
?>	


</pre>

</html>