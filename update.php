<?php
$file = new SplFileObject("file1.csv", "w"); 
$file->fputcsv(array($_COOKIE['_nom'],$_COOKIE['age'],$_COOKIE['moyenne'])); 
$file = null; 
var_dump(is_file("file1.csv"));
?>