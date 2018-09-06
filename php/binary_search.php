<?php

function binary_search($array, $value){
  sort($array);

  $l = 0;
  $r = count($array)-1;
  $result = false;

  while($l < $r && !$result){

    $m = (int) round(($l + $r) / 2);

    if($array[$m] == $value)
        {
          $result = true;
          echo "\n Value: $array[$m] is TRUE!";
        }
        elseif($array[$m] < $value)
        {
           $l = $m +1;
        }
        else
        {
          $r = $m - 1;
        }
  }
  if(!$result){
    echo "\n$value was not found";
  }
}
$massiv = array(1, 2, 32, 56, 91, 102, 144, 150, 56);
binary_search($massiv, 91);



 ?>
