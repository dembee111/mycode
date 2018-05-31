<?php
function recusion($a){
  if($a <= 1000){
    echo "$a<br/>";
    while($x=0,$x <= 500, )){
      $x = recusion($a + 2);
    }
  }
}
echo "<br />";
recusion(100);
?>
