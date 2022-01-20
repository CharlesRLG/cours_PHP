<?php 
Echo 'Mot de passe<br>';

$action = filter_var($_SERVER['PHP_SELF'], FILTER_VALIDATE_URL);

$saisie = $_GET['saisie'] ?? '-1';
$MDP = $saisie;

$MDPValide = '1234p';

if ($MDP == $MDPValide) {
    echo "Le mot de passe est bon";
}elseif ($MDP !== $MDPValide) {
    echo "Le mot de passe est faux";
}

?>
    <form method="GET" action="<?= $action ?>">
        <label for="saisie">Mot de passe</label>
        <input type="password" name="saisie" value="<?= $saisie ?? '' ?>"/>
        <input type="submit" value="envoyer">
    </form>
<hr>

<?php echo'<p>Votre nombre est\'il divisible par 2,3 ou 5 :</p>'; ?>
<?php $saisie9 = $_GET['saisie9'] ?? '0'; ?>
<form method="GET" action="<?=$_SERVER['PHP_SELF'] ?>">
<input type="number" 
        min="0" 
        max="1000000000" 
        step="1" 
        name="saisie9"
        value="<?= $saisie9 ?? '' ?>"/>
<input type="submit" value="envoyer">
</form>

<?php
    $Nombre = $saisie9;
    $Div2 = $Nombre % 2;
    $Div3 = $Nombre % 3;
    $Div5 = $Nombre % 5;

    if ($Div2 == 0 && $Div5 == 0 && $Div3==0){
        echo "Le nombre est divisible par 2, 3 et 5";
    }elseif ($Div2 == 0 && $Div5 == 0){
        echo "Le nombre est divisible par 2 et 5";
    }elseif ($Div2 == 0 && $Div3 == 0){
        echo "Le nombre est divisible par 2 et 3";
    }elseif ($Div3 == 0 && $Div5 == 0){
        echo "Le nombre est divisible par 3 et 5";
    }elseif ($Div3 == 0) {
        echo "Le nombre est divisible par 3";
    }elseif ($Div5 == 0){
        echo "Le nombre est divisible par 5";
    }else    if ($Div2 == 0) {
        echo "Le nombre est divisible par 2";
    }else {
        echo "Le nombre ne se divise pas par 2, 3 ou 5";
    } 
?>
<hr>

<?php echo'Qui est le plus grand, qui est le plus petit'; ?>

<?php 
        $a = $_GET['a'] ?? 0;
        $b = $_GET['b'] ?? 0;
        $c = $_GET['c'] ?? 0;
    ?>
        <form method="GET" action="<?= $action ?>">
            <label for name="a">a=</label>
            <input type="number" name="a" /><br>
            <label for name="b">b=</label>
            <input type="number" name="b" /><br>
            <label for name="c">c=</label>
            <input type="number" name="c" /><br>
            <input type="submit" value="envoyer">
        </form>

<?php

if ($a > $b && $a > $c) {
    echo "a est supérieur à b et c";
}elseif ($b > $a && $b > $c) {
    echo "b est supérieur à a et c";
}elseif ($c > $b && $c > $a) {
    echo "c est supérieur à a et b";
}else {
    echo "a, b et c sont égaux !";
}
?>

<hr>
<h2>Campanules et primevères</h2>
    <p>Calculer le prix d'achat des campanulese et des primevères</p>
    <ul>Règles de gestion : 
        <li>1,80 € / pot de campanules</li>
        <li>2,40 € / pot de primevères</li>
        <li>10% de réduction sur le total pour 5 pots de campanules achetés ou 6 pots de primevères achetés</li>
    </ul>
    <?php 
        $primevere = $_GET['primeveres'] ?? -1;
        $campanules = $_GET['campanules'] ?? -1;
    ?>
        <form method="GET" action="<?= $action ?>">
            <label for name="primeveres">Pots primevères : </label>
            <input type="number" name="primeveres" /><br>
            <label for name="campanules">Pots campanules : </label>
            <input type="number" name="campanules" />
            <input type="submit" value="envoyer">
        </form>

        <?php

if(is_numeric($primevere) && is_numeric($campanules)) {
    $prix = ($primevere * 2.4) + ($campanules * 1.8);
    if($primevere >= 6 or $campanules >=5) {
        $prix *= 0.9; // Réduction 10% équivaut à $prix = $prix * 0.9;
    }
    echo 'Prix des plantes : ' . 
       number_format($prix,2,',') . ' € <br>';
  }

?>
<hr>

<h2>Switch feu tricolore</h2>
        <p>Ecrire un switch d'après la couleur du feu.
            Vert je passe, rouge je m'arrête, orange, je redouble d'attention.
    </p>

        $action = filter_var($_SERVER['PHP_SELF'], FILTER_VALIDATE_URL);

        $saisie = $_GET['saisie'] ?? '-1';
        $couleur = $saisie;


        ?>
        <form method="GET" action="<?= $action ?>">
            <label for="saisie">Couleur</label>
            <input type="text" name="saisie" value="<?= $saisie ?? '' ?>"/>
            <input type="submit" value="envoyer">
        </form>

        <?php

        $vert="vert";
        $orange="orange";
        $rouge="rouge";

        switch($saisie){
            case $vert:
                echo "C'est vert, je passe !<br>";
                break;
            case $orange:
                echo "C'est orange, je redouble d'attention !<br>";
                break;
            case $rouge:
                echo "C'est rouge, je m'arrête !<br>";
                break;
            default:
                echo "Dans le doute, je redouble d'attention !<br>";
        }

        ?>
<h2>Switch feu tricolore</h2>
        <p>Ecrire un switch d'après la couleur du feu.
            Vert je passe, rouge je m'arrête, orange, je redouble d'attention.
    </p>

        $action = filter_var($_SERVER['PHP_SELF'], FILTER_VALIDATE_URL);

        $saisie = $_GET['saisie'] ?? '-1';
        $couleur = $saisie;


        ?>
        <form method="GET" action="<?= $action ?>">
            <label for="saisie">Couleur</label>
            <input type="text" name="saisie" value="<?= $saisie ?? '' ?>"/>
            <input type="submit" value="envoyer">
        </form>

        <?php

        switch($couleur){
            case 'vert':
                echo "C'est vert, je passe !<br>";
                break;
            case 'orange':
                echo "C'est orange, je redouble d'attention !<br>";
                break;
            case 'rouge':
                echo "C'est rouge, je m'arrête !<br>";
                break;
            default:
                echo "Dans le doute, je redouble d'attention !<br>";
        }

        echo 'Suite du switch ligne ' . __LINE__ . ' <br> ';

        $action =
        match ($couleur) {
            'vert'=>'je passe',
            'orange'=>'attention',
            'rouge'=>'je m\'arrête',
            default => '?? agni !!! ??'
        };

        echo 'avec match';

        ?>
</body>
</html>


