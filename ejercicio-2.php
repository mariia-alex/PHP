<?php
echo "Give me a number:\n";
$handle = fopen("php://stdin","r");
$kolich = intval(fgets($handle));
$zv='*';
$zv2='**';
$prob=" ";
$prob1=" ";
for($i=1; $i<=$kolich; $i+=2)
$prob.=$prob1;
for($i=1; $i<=$kolich; $i+=2)
{

    echo $prob;
    echo $zv;
    echo "\n";
    $zv.=$zv2;
    $prob=substr($prob, 1);


}
$zv=substr($zv, 2);
$prob.=$prob1;
for($i=$kolich; $i>=1; $i-=2)
{
    $zv=substr($zv, 2);
    $prob.=$prob1;
    echo $prob;
    echo $zv;
    echo "\n";
    


}
