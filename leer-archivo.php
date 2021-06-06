<?php

// функция для чтения файла
$homedir = '/home/maria/A-Level/test.txt';
$file = fopen ('test.txt', 'r');

  while (!feof($file))
                         {
        echo fgets ($file) "\n";
  }
   fclose ($file);

?> 