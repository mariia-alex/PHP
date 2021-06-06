<?php

echo " Укажите путь к файлу\n В формате:   '/home/Maria/A-Level/test.php\n";

$handle = fopen("php://stdin","r");
$input1 = fgets($handle);

echo " Укажите путь к папке (каталогу)\n В формате:   '/home/Maria/A-Level\n";

$input2 = fgets($handle);
$filepath = substr($input1,0,-1);
$dirToWrite = substr($input2,0,-1);


$array = file($filepath);
foreach ($array as $arr){
    $input = explode(' ', $arr);
    $fizz = $input[0];
    $buzz = $input[1];
    $num = $input[2];
    $counter = 1;
    $writeFizzBuzz = fopen ("$dirToWrite/fizz-buzz",'a+');
    while ($counter <= $num){

        if ($counter % $fizz === 0 && $counter % $buzz === 0){
            
            fwrite($writeFizzBuzz, "FB ");
        }
        elseif ($counter % $fizz === 0){
            fwrite($writeFizzBuzz, "F ");
        }
        elseif ($counter % $buzz === 0){
            fwrite($writeFizzBuzz, "B ");

        }
        else {
            fwrite($writeFizzBuzz, "$counter ");
        }     
        $counter += 1;
    }
    fwrite($writeFizzBuzz, "\n"); 
}
fclose($writeFizzBuzz);

?>
