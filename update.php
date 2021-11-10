<?php

public SplFileObject::__construct(string $file,string $mode = "a",bool $useIncludePath = false,?resource $context = null)}

$file = new SplFileObject("file1.csv", "a"); 
$file->fputcsv(array($_COOKIE['_nom'],$_COOKIE['age'],$_COOKIE['moyenne'])); 
$file = null; 
?>