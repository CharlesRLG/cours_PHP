<?php

$budget = 1553.07;
$achat = 1554.76;

echo "Budget $budget<br>";
echo "achat $achat<br>";

if ($budget >= $achat):
    echo "c'est ok";
else:
    echo "vous ne pouvez pas acheter ce produit";
endif;