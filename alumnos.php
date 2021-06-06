<?php

$studentsList = [
    "Ivanov" => [4,5,2,4,4],
    "Petrov" => [3,5,4,2],
    "Sidorov" => [5,5,4,5,5,5,4]
  ];

    foreach($studentsList as $key => $marks) { 
    echo $key." marks are: ".implode(" ",$marks)."\n"; 
  }

?>
