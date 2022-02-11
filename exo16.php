<?php

echo "1. Moyenne :<br/>";

$notes = [12,11,18,13,10,10,13,8,14,14,17,15,19,16,20,15,7,9,20,19];
$sommeNotes = 0;

for($i=0;$i<count($notes);$i++){
    $sommeNotes = $sommeNotes+$notes[$i];
}

print_r($notes);

echo "Moyenne : ".round($sommeNotes/count($notes),2);
echo "<br/><br/>";

echo "2. Nénuphar :<br/>";

$aireNenuphar = 10;
echo "Pour une aire de nénuphar de ".$aireNenuphar."cm²,";
$doubleAire = $aireNenuphar * 2;

for($nbJour=1;$aireNenuphar<=$doubleAire;$nbJour++){
    $aireNenuphar = $aireNenuphar+($aireNenuphar*0.1);
}

echo " il faudrait ".$nbJour." jours pour que son volume double";
echo "<br/><br/>";

echo "3. Promotion :<br/>";
$achat = 80;
echo "Pour un achat de ".$achat."€<br/>";
if($achat>101){
    echo "La remise est de 6%<br/>";
    $achat = $achat-($achat*0.06);
    echo "Soit ".$achat."€";
}
elseif($achat>50){
    echo "La remise est de 3,5%<br/>";
    $achat = $achat-($achat*0.035);
    echo "Soit ".$achat."€";
}
else{
    echo "Pas de réduction";
}
echo "<br/><br/>";

echo "4. Grand nombre sud un générateur de tableau :<br/>";
$tab = array();
for($i=0;$i<10;$i++){
    array_push($tab,rand(0,100));
}
print_r($tab)."<br/>";
echo "La valeur maximale de ce tableau est ".max($tab);
echo "<br/><br/>";

echo "5. Equation de second degré :<br/><br/>";
$a = 3;
$b = -6;
$c = -2;
$x1;
$x2;

echo "L'équation ".$a."x²".$b."x".$c."=0 est une équation de second degré<br/>";

$discriminant = pow($b,2)-4*$a*$c;

echo "Son disciminant est ".$discriminant."<br/><br/>";

if($discriminant>0){
    $x1 = (-$b-sqrt($discriminant))/(2*$a);
    $x2 = (-$b+sqrt($discriminant))/(2*$a);
    echo "Elle a deux solutions réelles : ".round($x1,2)." et ".round($x2,2);
}
elseif($discriminant == 0){
    $x1 = -$b/(2*$a);
    echo "Elle n'a qu'une seule solution réelle : ".round($x1,2);
}
else
    echo "Elle n'a pas de solutions réelles";

?>