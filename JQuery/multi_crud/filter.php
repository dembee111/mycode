<!DOCTYPE html>
<html>
<body>
    <?php
    const BR = "<br/>";
    echo "<pre>";

       $a = "Original";
        $my_array = array("a" => "Cat", "b" => "Dog", "c" => "Horse");
       if(in_array("Cat", $my_array)){

         extract($my_array, EXTR_PREFIX_SAME, "dup");

         echo "\$a = $a; \$b = $b; \$c = $c; \$dup_a = $dup_a";

       }else {
         echo "taarahgui bna";
       }
       echo BR;

       $people = array("Peter", "Joe", "Glenn", "Cleveland", 23);

            if (in_array(23, $people, TRUE))
              {
              echo "Хайсан утга Олдсон<br>";
              }
            else
              {
              echo "Хайсан утга Олдсонгүй<br>";
              }
            if (in_array("Glenn",$people, TRUE))
              {
              echo "Match found<br>";
              }
            else
              {
              echo "Match not found<br>";
              }

            if (in_array(23,$people, TRUE))
              {
              echo "Match found<br>";
              }
            else
              {
              echo "Match not found<br>";
              }
          echo BR;

          $people=array("Peter","Joe","Glenn","Cleveland");
          next($people);
          echo pos($people);
          echo BR;
          next($people);
          echo "The key from the current position is: " . key($people);
          echo BR;
          $my_array1 = array("barsaa","boldoo","hoop");
          $number = range(2,3);
          print_r($number);

          echo BR;
          $my_array = array("barsaa","boldoo","hoop");

          list($a, $b, $c) = $my_array;
          echo "I have several animals, a $a, a $b and a $c.";
          echo BR;
          echo BR;

          $temp_files = array("temp15.txt","Temp10.txt",
          "temp1.txt","Temp22.txt","temp2.txt");

          natsort($temp_files);
          echo "Natural order: ";
          print_r($temp_files);
          echo "<br />";

          natcasesort($temp_files);
          echo "Natural order case insensitve: ";
          print_r($temp_files);
          echo BR;
          $cars=array("Volvo","BMW","Toyota","Benz","Honda","Hyundai", "Mitsubishi");
            sort($cars);

            $clength=count($cars);
            echo "нийт $clength элемент байна";
            echo BR;
            echo BR;
            for($x=0;$x<$clength;$x++)
              {
              echo $cars[$x];

              echo "<br>";
              }
    ?>

</body>
</html>
