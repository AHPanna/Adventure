<?php

$file = "src/test";

$lines = file($file,FILE_IGNORE_NEW_LINES);

echo $lines[0]."<br>";
echo $lines[1]."<br>";
echo $lines[2]."<br>";
echo $lines[3]."<br>";




/*
//afficher chaques ligne
foreach($lines as $ligne){
    echo $ligne."<br>";
}
*/

$pieces = explode("-", $lines[1]);
echo $pieces[0]."<br>"; // piece1
echo $pieces[1]."<br>"; // piece2
echo $pieces[2]."<br>"; // piece3

  $remove = array(" ");
  $remove1 = array("-");
  echo "<pre>";
  print_r(array_diff($lines,$remove,$remove1)); 
  echo "</pre>";
?>