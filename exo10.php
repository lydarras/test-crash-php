<?php

$a = 2;
$b = 3;
$temp;

$temp = $b;

echo "Avant : A = $a et B = $b<br/>";
$b = $a;
$a = $temp;
echo "Après : A = $a et B = $b";

?>