<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8">
<h3>Choix du dessin</h3>

<form method="post" action="dessin_formulaire.php">
   
    Ligne de X <input type="radio" name="dessin2" value="1"><br>
    Rectangle <input type="radio" name="dessin2" value="2"><br>
    Triangle 1 <input type="radio" name="dessin2" value="3"><br>
    Triangle 2 <input type="radio" name="dessin2" value="4"><br>
    Toit <input type="radio" name="dessin2" value="5"><br>
    Maison <input type="radio" name="dessin2" value="6"><br>
    <br>
   
    <input type="submit" value="Envoyer">
    
</form>

<?php
    $codedessin = $_POST['dessin2'] ?? '';

    if ($codedessin==="1") {
?>
        <title>Dessin</title>
        <link rel="icon" href="data:;base64,iVBORw0KGgo=">
        <hr>
        <h3>Dessin Lignes</h3>
        <form method="GET" action="dessin.php">
            <input type="hidden" name="dessin" value="ligne">
            Nombre de X : <input type="number" name="nb" min="0" max="100" required><br>
            <input type="submit" name="submit" value="envoyer">
        </form>
        <hr>
<?php
    }
    if ($codedessin==="2") {
?>
        <h3>Dessin Rectangle</h3>
        <form method="GET" action="dessin.php">
            <input type="hidden" name="dessin" value="rect">
            Largeur du rectangle : <input type="number" name="largeur" min="0" max="100" required><br>
            Hauteur du rectangle : <input type="number" name="hauteur" min="0" max="100" required><br>
            <input type="submit" name="submit" value="envoyer">
        </form>
        <hr>
<?php
    }
    if ($codedessin==="3") {
?>
        <h3>Dessin Triangle 1</h3>
        <form method="GET" action="dessin.php">
            <input type="hidden" name="dessin" value="tri1">
            Hauteur du triangle : <input type="number" name="hauteur" min="0" max="100" required><br>
            <input type="submit" name="submit" value="envoyer">
        </form>
        <hr>
<?php
    }
    if ($codedessin==="4") {
?>
        <h3>Dessin Triangle 2</h3>
        <form method="GET" action="dessin.php">
            <input type="hidden" name="dessin" value="tri2">
            Hauteur du triangle : <input type="number" name="hauteur" min="0" max="100" required><br>
            <input type="submit" name="submit" value="envoyer">
        </form>
        <hr>
<?php
    }
    if ($codedessin==="5") {
?>
        <h3>Dessin Toit</h3>
        <form method="GET" action="dessin.php">
            <input type="hidden" name="dessin" value="toit">
            Largeur du dessin : <input type="number" name="largeur" min="0" max="100" required><br>
            Position du toit : <input type="number" name="position" min="0" max="100" required><br>
            Hauteur du toit : <input type="number" name="hauteur" min="0" max="100" required><br>
            <input type="submit" name="submit" value="envoyer">
        </form>
        <hr>
<?php
    }
    if ($codedessin==="6") {
?>
        <h3>Dessin Maison</h3>
        <form method="GET" action="dessin.php">
            <input type="hidden" name="dessin" value="mais">
            Position de la maison : <input type="number" name="position" min="0" max="100" required><br>
            Hauteur de la masion : <input type="number" name="hauteurMaison" min="0" max="100" required><br>
            Hauteur des murs : <input type="number" name="hauteurMur" min="0" max="100" required><br>
            <input type="submit" name="submit" value="envoyer">
        </form>
        <hr>
<?php
    }
?>
<?php
    
    if ($codedessin==="") {
?>

<?php
    }
?>

</html>