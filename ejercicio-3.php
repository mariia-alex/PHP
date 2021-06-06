<?php
   
    echo "Input path to the file\n";
    $handle = fopen("php://stdin","r");
    $input1 = fgets($handle);
    $filepath = substr($input1,0,-1);

    $array = file($filepath);

    foreach ($array as $str) {
        $a = explode(';', $str);
        $b1 = explode(" ", $a[0]);
        $b2 = explode(" ", $a[1]);
        $countArr = count($b1);
        $sumArr = array_sum($b1);
        $result1 = (int)($sumArr / $countArr);
        $result2 = round($result1, 0, PHP_ROUND_HALF_DOWN);

        $resultA = (int)($sumArr % $countArr);
        $resultB = $resultA;

        if ($result2 == $b2[0]){
            echo "\nsum true\n";
        }
        else  echo "\nsum false\n";
            
        if ($resultB == $b2[1]){
            echo "\nlast true\n";
        }    
        else  {
            echo "\nlast false\n";
        }
    }
