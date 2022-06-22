<?php
$sum=0;
  for($i=0;$i<1000;$i++){
    if($i % 3 == 0 || $i % 5 == 0){
    $sum=$sum+$i;}  
  }
  echo "la suma de los multiplos de 3 y 5 hasta debajo del 1000 es: ". $sum;
  ?>
