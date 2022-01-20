<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 : Boucles + while</title>
</head>

<body>
    <h1>TD – Algorithmes - Suites et sommes</h1>
    <h2>2. Écrire un programme qui demande la valeur de n et renvoie le terme Sn</h2>
    <?php
    function somme($v)
    { //Valeur à atteindre
        $s = 0; //valeur de départ
        $i = 0; // Compteur
        while ($i <= $v) {
            $s = $s + (1 / (2 ** $i)); // le ** c'est une puissance
            $i++;
        }
        return $s;
    }
    echo "S<sub>1</sub> =" . "&nbsp;" . number_format(somme(1), 7, ",", "&nbsp;") . "<br>";
    echo "S<sub>2</sub> =" . "&nbsp;" . number_format(somme(2), 7, ",", "&nbsp;") . "<br>";
    echo "S<sub>3</sub> =" . "&nbsp;" . number_format(somme(3), 7, ",", "&nbsp;") . "<br>";
    echo "S<sub>4</sub> =" . "&nbsp;" . number_format(somme(4), 7, ",", "&nbsp;") . "<br>";

    /*    function calcul($n)
     {
        $a = 2; //Nombre de fois où on va diviser la division
        $b = (1 / 2); //La division en question
        while ($a < $n) {
           $a = ($a*2);
        }
        return [$a];
    }
    echo calcul(2)[0];*/
    ?>

    <h2>3. Conjecturez la limite de la suite Sn en utilisant le programme de la question 2</h2>

    <?php
    echo "S<sub>10</sub> =" . "&nbsp;" . number_format(somme(10), 7, ",", "&nbsp;") . "<br>";
    echo "S<sub>20</sub> =" . "&nbsp;" . number_format(somme(20), 7, ",", "&nbsp;") . "<br>";
    echo "S<sub>24</sub> =" . "&nbsp;" . number_format(somme(24), 7, ",", "&nbsp;") . "<br>";
    echo "<strong>S<sub>25</sub> =" . "&nbsp;</strong>" . number_format(somme(25), 7, ",", "&nbsp;") . "<br>";
    echo "S<sub>30</sub> =" . "&nbsp;" . number_format(somme(30), 7, ",", "&nbsp;") . "<br>";
    echo "S<sub>100</sub> =" . "&nbsp;" . number_format(somme(100), 7, ",", "&nbsp;") . "<br>";
    echo "S<sub>200</sub> =" . "&nbsp;" . number_format(somme(200), 7, ",", "&nbsp;") . "<br>";
    echo "S<sub>1000</sub> =" . "&nbsp;" . number_format(somme(1000), 7, ",", "&nbsp;") . "<br>";
    ?>
    <p>La limite sera à S<sub>25 </p>

    <h2>5a. A l’aide du programme écrit en 2. Déterminer le plus petit entier n tel que :</h2>
    <?php
    echo "S<sub>1</sub> =" . "&nbsp;" . number_format(somme(1), 1, ",", "&nbsp;") . "<br>";
    echo "S<sub>2</sub> =" . "&nbsp;" . number_format(somme(2), 2, ",", "&nbsp;") . "<br>";
    echo "S<sub>3</sub> =" . "&nbsp;" . number_format(somme(3), 3, ",", "&nbsp;") . "<br>";
    ?>

    <h2>5b. Écrire un programme qui prend en compte le seuil et donne en sortie le plus petit entier n tel que Sn > seuil.</h2>
    <?php

    function seuil($x)
    { //Valeur à atteindre
        $m = 1; //valeur de départ
        $compteur = 0; // Compteur
        while ($m < $x) {
            $compteur++;
            $m = $m + (1 / (2 ** $compteur));
        }
        return $compteur;
    }

    function afficher($it, $pa)
    {
        echo "Seuil $pa atteint au bout de : $it itération.s " . "<br>";
    }

    afficher(seuil(1), 1);
    afficher(seuil(1.5), 1.5);
    afficher(seuil(1.9), 1.9);
    afficher(seuil(1.99), 1.99);
    afficher(seuil(1.999), 1.999);

    ?>
</body>

</html>