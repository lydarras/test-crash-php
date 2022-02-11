<?php

$nbMax = 30;
$totalSomme= 0;

for($i=1;$i<30;$i++){
    echo $i."+";
    $totalSomme = $totalSomme+$i;
}
echo $nbMax."<br/><br/>";
$totalSomme = $totalSomme+$nbMax;

echo "= ".$totalSomme;

?>