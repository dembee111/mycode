<?php

// Тэгш өнцөгт гурвалжинг талбайг нь олох
function bodoh($x, $y){
  $z = $x*$x-$y*$y/(1+abs($x*$y));
  return $z;
}

echo bodoh(6, 5);

// -----------------------

function square($a, $b){
  $c = sqrt($a * $a + $b * $b);
  $s = $a * $b/2;

  return array($c, $s);
}
echo "<br>";
echo square(4, 6)[1];
echo "<br>";
echo "haha";
echo square(4, 6)[0][1];
//----x ba y toonuud ugugdjee herew x ni y toonoos ih bol m huwisagchiig utgiig 1, esreg tohioldold 0 bolgono

function songolt($x, $y){
  if($y<$x){
    $m = 1;
  }else{
    $m = 0;
  }
  return $m;
}

echo "<br>";
echo "x ba y toonuud ugugdjee herew x ni y toonoos ih bol m huwisagchiig utgiig 1, esreg tohioldold 0 bolgono";
echo "<br>";
echo songolt(4, 9);

//---x y ugudsun bol z daraah tomiyogoor ol
function zoloh($x, $y){
  $m = $x * $x +$y * $y;

  if($m <1){
  return $z = $x;

  }elseif(1 < $m && $m<3){
   return $z = $y;

  }elseif(3 < $m){
    return $z = $x + $y;
  }

}
echo "<br>";
echo zoloh(1 , 1);
//--------------------------

function abc($a, $b, $c){
  if($a != 0){
    $d = $b * $b - 4 * $a * $c;

    if($d>=0){
       $d = sqrt($d);
       $x1 = (-$b + $a)/(2 * $a);
       $x1 = (-$b - $a)/(2 * $a);
       return array($x1, $x2);

    }
    else{
       echo "Энэ бол шийдгүй л эд байнадаа";
    }

  }else{
    if($b!= 0){
      return $x1 = -$c/$b;
    }
    else{
      if($c = 0){
        echo "шийдвэй л юм байнадаа";

      }
      else{
        echo "шийдгүй лв...";
      }
    }
  }
}
echo "<br>";
echo abc(5, 7, 8)[1];
 ?>
