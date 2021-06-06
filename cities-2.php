<?php

function beautyName($name) {
     return ucfirst(strtolower($name));
 } 
 
 $test = "San franCisCo";
 
 $a = explode(" ", $test);
 
 print_r(array_map("beautyName", $a));
