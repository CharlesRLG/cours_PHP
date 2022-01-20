<meta charset="utf-8"/>

<!-- Exemple 1 -->
<h2>Exemple fonction 1</h2>
<br>
<?php
function afficherPourcentage ($nb1, $nb2)
{
    $resultat = $nb1/$nb2*100; 
    // "/" est l'opérateur de division en PHP
    // "*" est l'opérateur de multiplication en PHP
    echo $resultat."%";
}
afficherPourcentage (12, 24);
echo "<br />";
afficherPourcentage (7, 70);
?>
<hr>
<!-- Exemple 2 -->
<h2>Exemple fonction 2</h2>
<br>
<?php
function calculPourcentage ($nb1, $nb2)
{
    $resultat = $nb1/$nb2*100; 
    return $resultat."%";
}
$pourcent = calculPourcentage (3, 10);
?>
<?php
echo $pourcent;
?>

<hr>

<h2>Calcul de l'aire d'un cercle en m²</h2>
    <?php
        
        $action = filter_var($_SERVER['PHP_SELF'], FILTER_VALIDATE_URL);
        $nom = 'rayon';
        $rayon = -1;
        if(isset($_GET[$nom])) {
            $saisie = $_GET[$nom];
            $rayon = floatval($saisie);
        }
        ?>
        <form method="GET" action="<?= $action ?>">
            <label for name="<?= $nom ?>">Rayon</label>
            <input type="number" name="<?= $nom ?>" />
            <input type="submit" value="envoyer">
        </form>

    <?php
        /* compléter à partir d'ici */
        if( $rayon > 0) {
            echo surface($rayon);
        }else  {
            echo "Impossible" ;
        }

        function surface($rayon)
        {
            $air = M_PI*($rayon**2); 
            return number_format($air,2)."m²";
        } 
        
    ?>

<h2>Calcule IMC</h2>

<?php 
    $nom = 'poids';
    $nom2 = 'taille';
    $saisie = -1; $poids = -1;
    if(isset($_GET[$nom]) && isset($_GET[$nom2])) {
        $saisie = $_GET[$nom];
        $poids = intval($saisie);

        $saisie = $_GET[$nom2];
        $taille = intval($saisie);
    }
    ?>
    <form method="GET" action="<?= $action ?>">
        <label for name="<?= $nom ?>">Poids (kg)</label>
        <input type="number" name="<?= $nom ?>" /><br>
        <label for name="<?= $nom2 ?>">Taille (cm)</label>
        <input type="number" name="<?= $nom2 ?>" /><br>
        <input type="submit" value="envoyer">
    </form>

    <?php

        if($taille<=0 || $poids<=0) {
            echo "Impossible";
        }elseif(calculeIMC($taille, $poids) > 0 && calculeIMC($taille, $poids) <= 6) {
            echo "erreur";
        }elseif(calculeIMC($taille, $poids) > 6 && calculeIMC($taille, $poids) <= 18.4) {
            echo "Vous êtes maigre, votre IMC est de :" . calculeIMC($taille, $poids);
        }elseif(calculeIMC($taille, $poids) >= 18.5 && calculeIMC($taille, $poids) <= 24.9) {
            echo "Vous êtes de corpulence nomale, votre IMC est de :" . calculeIMC($taille, $poids);
        }elseif(calculeIMC($taille, $poids) >= 25 && calculeIMC($taille, $poids) <= 29.9) {
            echo "Vous êtes en surpoids, votre IMC est de :" . calculeIMC($taille, $poids);
        }elseif(calculeIMC($taille, $poids) >= 30 && calculeIMC($taille, $poids) <= 34.9) {
            echo "Vous êtes en obésité modérée, votre IMC est de :" . calculeIMC($taille, $poids);
        }elseif(calculeIMC($taille, $poids) >= 35 && calculeIMC($taille, $poids) <= 39.9) {
            echo "Vous êtes en obésité sévère, votre IMC est de :" . calculeIMC($taille, $poids);
        }elseif(calculeIMC($taille, $poids) >= 40 && calculeIMC($taille, $poids) <= 99.9) {
            echo "Vous êtes en obésité morbide, votre IMC est de :" . calculeIMC($taille, $poids);
        }elseif(calculeIMC($taille, $poids) >= 100) {
            echo "erreur";
        }
        
        function calculeIMC($taille, $poids) {

            $IM = $poids/($taille**2);
            $IMC = number_format($IM*10000,1);
            return $IMC;
        }

    ?>