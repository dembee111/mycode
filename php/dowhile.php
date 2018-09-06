<?php

function anhiitoo($n){
  if($n==1){
    echo "Анхын тоо мөн байна: $n";
  }else{
    $i = 1;
    $p = 0;
    //---давталт эхэлж байна--
    do{
      if($n % $i ==0){
        $p = $p + 1;

      }

     $i = $i + 1;
    }while($i <= $n);

    if($p = 2){
      echo "Мөн байна";
    }else{
      echo "биш байна";
    }

  }
}
echo anhiitoo(2);

 ?>
