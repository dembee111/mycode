<?php


$arr = array(5, 5, 2, 3, 7, 3);

     sort($arr);
     $arrlength = count($arr);
     for($x = 0; $x < $arrlength; $x++) {
      echo $arr[$x];
      echo "<br/>";
 }

echo "----------------------------------";
echo "<br/>";

function linear_search($array, $value){
 $i = 0;
 $result = false;

 while($i < count($array)){
   if($array[$i]== $value){
      echo "$array[$i] гэсэн тоо байнаа та оллоо \n";
      $result = true;
      break;

   }
   $i++;
 }
 if(!$result){
   echo "$value ийм тоо огт байхгүй байнаа ...\n";
 }
}

linear_search([1, 2, 32, 56, 88, 91, 102, 144, 150], 41);






 ?>
