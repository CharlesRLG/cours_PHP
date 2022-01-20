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
</pre><hr><pre>
<?php
    $nb = intval($_GET['nb'] ?? 12);
	echo 'Nombre de X demandés : ' . $nb . '<br>';
	echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	for($i = 0 ; $i <= $nb ; $i++) {
		echo 'X';
	}
	echo '<br>';

?></pre>
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

<?php
  $hauteur = intval($_GET['hauteur'] ?? 0);
  $largeur = intval($_GET['largeur'] ?? 0);
  for($i = 0 ; $i < $hauteur ; $i++) {
    for($j = 0 ; $j < $largeur ; $j++) {
      echo 'X';
    }
    echo "\n";
  }
?>
</pre><hr>
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
</pre><hr><pre>
<?php
  $hauteur = intval($_GET['hauteur'] ?? 0);

  for($i = 0 ; $i < $hauteur ; $i++) {
    for($j = 0 ; $j < $i ; $j++) {
      echo 'X';
    }
    echo "\n";
  }
?>
</pre><hr>
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
</pre><hr><pre>
<?php
  $hauteur = intval($_GET['hauteur'] ?? 0);

  for($i = 0 ; $i < $hauteur ; $i++) {
    for($j = 0 ; $j < 2 * $i + 1 ; $j++) {
      echo 'X';
    }
    echo "\n";
  }
?>
</pre><hr>
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
</pre><hr><pre>
<?php
  $hauteur = intval($_GET['hauteur'] ?? 0);
  $largeur = intval($_GET['largeur'] ?? 0);
  $position = intval($_GET['position'] ?? 0);

  $nbGauche = $position + $hauteur - 1;
  $nbDroite = $largeur - $nbGauche - 1;

  for($i = 0 ; $i < $hauteur ; $i++) {
    for($j = 0 ; $j < $nbGauche ; $j++) {
      echo '—';
    }

    for($j = 0 ; $j < 2 * $i + 1 ; $j++) {
      echo 'X';
    }

    for($j = 0 ; $j < $nbDroite ; $j++) {
      echo '—';
    }
    $nbGauche--;
    $nbDroite--;
    echo "\n";
  }
?></pre>
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
</pre>
<?php
	default: ?>
	<pre>
Créer un formulaire où l'utilisateur choisit un type de dessin à réaliser
    - Ligne de X
	- Rectangle
	- Triangle 1
	- Triangle 2
	- Toit
	- Maison
</pre><hr><pre>

<?php
  $hauteurMaison = intval($_GET['hauteurMaison'] ?? 0);
  $largeur = intval($_GET['largeur'] ?? 0);
  $position = intval($_GET['position'] ?? 0);
  $hauteurMur = intval($_GET['hauteurMur'] ?? 0);
  $hauteur = $hauteurMaison - $hauteurMur;

  $nbGauche = $position + $hauteur - 1;
  $nbDroite = $largeur - $nbGauche - 2;

  for($i = 0 ; $i < $hauteur ; $i++) {
    for($j = 0 ; $j < $nbGauche ; $j++) {
      echo '—';
    }

    for($j = 0 ; $j < 2 * $i + 1 ; $j++) {
      echo 'X';
    }

    for($j = 0 ; $j < $nbDroite ; $j++) {
      echo '—';
    }
    $nbGauche--;
    $nbDroite--;
    echo "\n";
  }

  $nbGauche = $position;
  $nbDroite = $largeur - $nbGauche - 2*$hauteur;
  for($i = 0 ; $i < $hauteurMur ; $i++) {
    for($j = 0 ; $j < $nbGauche ; $j++) {
      echo '—';
    }
    for($j = 0 ; $j < 2 * $hauteur - 1 ; $j++) {
      echo 'X';
    }
    for($j = 0 ; $j < $nbDroite ; $j++) {
      echo '—';
    }
    echo "\n";
  }
?></pre>
<?php } ?>

</html>
