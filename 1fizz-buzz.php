<?php

echo "Give me a number:\n";

$handle = fopen("php://stdin","r");                                    

$fizz = (int)fgets($handle);
$buzz = (int)fgets($handle);
$num = (int)fgets($handle);

for ($i = 1; $i <=18; $i++) {
    if ($i % 2 == 0 && $i % 5 == 0) {
    echo "FB\n"; 
 }  elseif ($i % 2 == 0) {
    echo "F\n";
 }  elseif ($i % 5 == 0) {
    echo "B\n";
 }  else  {
    echo $i;
 }

 echo "\n";
}
?> 
