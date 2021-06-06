<?php
    
    define("SIMPLES",100);
    $i = 2;
    $n = 1;
    $count = 1;
    $result = 0;
    
    while ($count <= SIMPLES){
        if (($i % 2 != 0 || $i == 2) && ($i % 3 != 0 || $i == 3)) {
        if (($i % 5 != 0 || $i == 5) && ($i % 7 != 0 || $i == 7)) {
              
                $rang = range(2,$i);
                $betaN = 2;
                $arr1 = array();
                
                for ($betaN;$betaN < $i;$betaN++){
                    $z = $i  % $betaN;
                    if ($z == 0){
                       array_push($arr1, 1);
                    }
                }

                if (count($arr1) == 0) {
                    echo "$n: $i;\n";
                $count++;
                $n++;
                $result += $i;
                }
            } 
        }
        $i++;
    }
    echo ("\n\nResultado de " . SIMPLES . " numeros simples: $result\n\n");
    
    ?>
