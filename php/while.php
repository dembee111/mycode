<?php

function umnuh($n){
  $i = 1;
  $s = 0;

  while($i <= $n){

    if($i % 2 == 0){
      // алхам нэмэгдэх бүрт S утга дээр if ээр нэмэгдүүлж байнаа
      $s = $s + $i;
    }
    else
    {
       false;
    }
     // давталтын алхам
     $i = $i + 1;
     echo "<br/>";
     echo "энэ бол давталтын алхам: $i";

  }
  echo "<br/>";
  return $s;
}
echo umnuh(10);
echo "<br/>";
echo "=================================================";

function factorial($n){
  $i = 1;
  $p = 1;

  while($i<= $n){
    $p = $p * $i;
    $i = $i + 1;
  }
  return $p;
}
echo "<br/>";
echo factorial(50);

echo "<br/>";
echo "=================================================";
function para($x, $n){
  $p = 1;
  $s = 0;
  $t = -1;

  for($i = 1; $i<=$n; $i = $i + 1){
    $p = $p * $x;
    $t = (-1) * $t;
    $s = $s + $t * $p/$i;
  }
  return $s;
}
echo "<br/>";
echo para(8, 6);
echo "<br/>";
echo "=================================================";
function dowhile($n){
  $s = 0;
  $i = 1;
  do{
    $s = $s + $i;
    $i = $i +1;
    echo "<br/>";
    echo "алхам алхамаар: $i";

  }while($i <= $n);
  echo "<br/>";
  return $s;
}
echo "<br/>";
echo dowhile(6);
 ?>
