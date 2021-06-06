<?php
echo "Give me a number:\n";
$handle = fopen("php://stdin","r");
$kv = intval(fgets($handle));
//$handle = fopen("php://stdin","r");
$eatzh = intval(fgets($handle));
//$handle = fopen("php://stdin","r");
$kvnaet = intval(fgets($handle));
//function kurier($kv, $eatzh, $kvnaet) 
    //{
        $kv--;
        $buf=$kvnaet*$eatzh;
        $podk=intdiv ($kv, $buf);
        $ost=$kv-$podk*($buf+1);
        $etaxhk=intdiv ( $ost, $kvnaet );
        echo $etaxhk+1, " ";
        echo $podk+1;
      //  return true;
    //}
