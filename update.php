<?php
$list = array
($_COOKIE['_nom'],$_COOKIE['age'],$_COOKIE['moyenne']);

$file = fopen('file1.csv','a');  // 'a' for append to file - created if doesn't exit

foreach ($list as $line)
  {
  fputcsv($file,explode(',',$line));
  }

fclose($file); 
?>