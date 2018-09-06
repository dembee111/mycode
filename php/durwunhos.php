<?php
function oloh4(){

  $m= 0;
  for ($i=1; $i <= 9 ; $i++) {
     for ($j=0; $j <= 9 ; $j++) {
       for ($k=0; $k <=9 ; $k++) {
         for ($l=0; $l <=9 ; $l++) {


            if($i + $j == $k + $l){
              
              echo "<br/>";

              echo "Тоог оллоо: $i$j == $k$l ";
              $m++;
              echo "<br/>";
              echo $m;
            }


         }
       }
     }
  }


}
echo oloh4();




 ?>
