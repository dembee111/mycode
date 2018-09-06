<?php

function bodlogo(){
  $s = 0;
  for ($i=1; $i <= 12; $i++) {
     for ($j=1; $j <= 15 ; $j++) {
        $s = $s + 1;
        echo "<br/>";
        echo "эрэгтэй : $i эмэгтэй: $j";
     }
  }
  echo "<br/>";
  return $s;
}
echo bodlogo();

 ?>
