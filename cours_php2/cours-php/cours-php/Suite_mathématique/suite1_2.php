<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8" />
<link rel="icon" href="data:;base64,iVBORw0KGgo=">
<title>Boucles</title>
<?php
/*
  n   u(n)    n <= 5
u 0 = 500     VRAI
u 1 = 451     VRAI
u 2 = 406,90  VRAI
u 3 = 367,21  VRAI
u 4 = 331,49  VRAI
u 5 = 299,34  VRAI
u 6 = 270,41  FAUX

u(0)   = 500
u(n+1) = u(n) * 0,9 + 1

*/

function u($N)
{
  $u = 1000;
  $n = 0;
  while ($n < $N) {
    $n++;
    $u = $u;
  }
  return $u;
}


function afficher($n, $u)
{
  echo 'u<sub>' . $n . '</sub>' . ' = ';
  echo number_format(
    $u,
    decimals: '2',
    decimal_separator: ',',
    // \u{202F} Espace insécable étroit / Narrow No-Break Space (NNBSP)
    // Séparateur de milliers officiel pour la langue française
    // cf. https://cldr.unicode.org/index/downloads/cldr-34
    thousands_separator: "\u{202F}"
  ) . '<br>';
}

echo '<h2>Calcul manuel</h2>';
$n = -1;
$u = 1000;

$n++;
afficher($n, $u);
$u = $u * 1.02 + 2400;

$n++;
afficher($n, $u);
$u = $u * 1.02 + 2400;

$n++;
afficher($n, $u);
$u = $u * 1.02 + 2400;

$n++;
afficher($n, $u);
$u = $u * 1.02 + 2400;

$n++;
afficher($n, $u);
$u = $u * 1.02 + 2400;

$n++;
afficher($n, $u);
$u = $u * 1.02 + 2400;

$n++;
afficher($n, $u);
$u = $u * 1.02 + 2400;

$n++;
afficher($n, $u);
$u = $u * 1.02 + 2400;

$n++;
afficher($n, $u);
$u = $u * 1.02 + 2400;

$n++;
afficher($n, $u);
$u = $u * 1.02 + 2400;



?>

</html>