<?php
//----factorial iig ol------
//-----while loop-------------

function fact($n){
  $i = 1;
  $p = 1;
  while($i<=$n){
    $p = $p * $i;
    $i = $i + 1;
  }
  return $p;
}
echo fact(5);

//--do while----------
function factorial($n){
  $p = 1;
  $i = 1;
  do{
    $i = $i + 1;
    $p = $p * $i;
    echo "<br/>";
    echo "Давталтыг харуулнаа : $p";


  }while($i <= $n);
  echo "<br/>";
  return $p;
}
echo "<br/>";
echo factorial(5);
//------for loop----------parameter with loop
function forloop($m){
   $p = 1;
   for($i = 1; $i <=$m; $i++){
     $p = $p * $i;

   }
   return $p;
}
echo "<br/>";
echo forloop(5);

 ?>
