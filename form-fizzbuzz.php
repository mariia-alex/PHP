<?php

$fizz = $_POST[firstNumber];
$buzz = $_POST[secondNumber];
$num = $_POST[thirdNumber];
$counter = 1;

echo "\n";

while ($counter <= $num){

    if ($counter % $fizz == 0 && $counter % $buzz == 0){
        print_r ("FB ");
    }
    elseif ($counter % $fizz == 0){
        print_r ("F ");
    }
    elseif ($counter % $buzz == 0){
        print_r ("B ");

    }
    else print_r ("$counter "); 
    $counter += 1;
}


    var_dump($_POST);
        exit();

