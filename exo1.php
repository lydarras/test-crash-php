<?php
$cote1 = 8;
$cote2 = 5;
$hypotenuse = sqrt(pow($cote1,2)+pow($cote2,2));

echo "La 1ère côte mesure $cote1 cm tandique la 2ème côte mesure $cote2 cm<br/>";
echo "Donc l'hypoténuse mesure ".round($hypotenuse,2)."cm";

?>
