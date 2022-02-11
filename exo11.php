<?php

$totalSeconde = 347872;

echo $totalSeconde." secondes correspodent à ";
echo floor($totalSeconde/3600)."h".floor(($totalSeconde%3600)/60)."m".($totalSeconde%3600%60)."s";

?>