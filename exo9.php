<?php

$nbMax = 5;
$totalSomme= $nbMax;

for($i=$nbMax;$i>1;$i--){
    echo $i."*";
    $totalSomme = $totalSomme*($i-1);
}
echo "1<br/><br/>";

echo $nbMax."! = ".$totalSomme;

?>