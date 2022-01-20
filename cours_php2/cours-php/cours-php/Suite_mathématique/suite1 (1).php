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

function suite($N)
{
  $u = 500;
  $n = 0;
  while ($n < $N) {
    $n = $n + 1;
    $u = 0.9 * $u + 1;
  }

  return [$n, $u];
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


echo '<h2>Test</h2>';
$retour = suite(0);
afficher($retour[0], $retour[1]);
$retour = suite(5);
afficher($retour[0], $retour[1]);

$i = 1;
const N = 10;
echo '<h2>Avec boucle while</h2>';
while ($i <= N) {
  $retour = suite($i);
  afficher($retour[0], $retour[1]);
  $i++;
}

echo '<h2>Avec boucle for</h2>';
for ($i = 1; $i < N; $i++) {
  $retour = suite($i);
  afficher($retour[0], $retour[1]);
}
?>

</html>