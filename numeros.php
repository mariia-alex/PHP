<?php 

$array = [1,2,3,4,5,6,7];

function countNum($array) {

    $sum = array_sum($array);
    $coutElements = count($array);
    $avNum = $sum / $coutElements;
    echo($avNum);
}

countNum($array);

?>
