<?php
//linear search 
function linear_search($arr, $val){
  $n = 0;
  $result = false;

  while($n<count($arr)){
    if($arr[$n] == $val){
      echo "$val хайсан утга байна";
      $result = true;
      break;
    }
    $n++;
  }
  if(!$result){
    echo "$val хайсан утга олдсонгүй ээ";
  }
}
linear_search([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 13, 16, 17, 18], 8);

 ?>
