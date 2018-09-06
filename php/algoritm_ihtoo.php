<?php
// их тоо олох алгоритм
function xyz($x, $y, $z){
  if($x > $y){
    if($x>$z){
      $max = $x;
      $min = $y;
      if($z<$min){

        $min = $z;

      }
      else{
        false;
      }
    }else{
      $max = $z;
      $min = $y;
    }
  }else{
    if($y > $z){
      $max = $y;
      $min = $x;
      if($z < $min){
        $min = $z;
      }
      else{
        false;
      }
    }
    else{
      $max = $z;
      $min = $x;
    }
  }
  echo "Хамгийн их тоо бол $max. Хамгийн бага тоо бол:$min";
}
echo xyz(7, 7, 8);


 ?>
