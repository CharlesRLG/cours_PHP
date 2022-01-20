<?php

function batimentDefence($niveauMax) {

$prixDefence = 750000;
$niveau = 0;

    while($niveau<=$niveauMax) {
        $prixDefence = ($prixDefence/15) + $prixDefence;
        $niveau = $niveau + 1;
    }
    return [$niveau, $prixDefence];
}  

?>

<table style="border: 1px black solid">
    <tr>
        <td style="border: 1px black solid"><?= number_format (batimentDefence(0)[1],0,',','&nbsp') ?></td>
        <td style="border: 1px black solid"><?= number_format (batimentDefence(1)[1],0,',','&nbsp') ?></td>
        <td style="border: 1px black solid"><?= number_format (batimentDefence(2)[1],0,',','&nbsp') ?></td>
    </tr>
    <tr>
        <td style="border: 1px black solid"><?= batimentDefence(0) [0] ?></td>
        <td style="border: 1px black solid"><?= batimentDefence(1) [0] ?></td>
        <td style="border: 1px black solid"><?= batimentDefence(2) [0] ?></td>

    </tr>
</table>