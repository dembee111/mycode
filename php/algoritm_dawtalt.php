<?php
// Параметрт давталт

function too($too){
  for($i = 100; $i <= 999; $i = $i + 1){

     $a = $i % 10;
     $b = ($i / 10)%10;
     $c = $i/100;
     if($a + $b + $c == $too){
       echo "3 оро нтой тоо:$too";
     }else{
       return $i;
     }
  }



  }
  echo too(450);




 ?>
