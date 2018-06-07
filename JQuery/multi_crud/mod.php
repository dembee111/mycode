<!DOCTYPE html>
<html>
 <head>
  <title>Bootstrap Multi Select Dynamic Dependent Select box using PHP Ajax </title>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <style>
  .uguulber{
    color: green;
    font-size: 15px;
  }
  </style>
</head>
 <body>
   <?php
   const BR = "<br />";
   $age = array('peter'=>'35','Ben'=>'37','joe'=>"43");
   print_r(array_change_key_case($age, CASE_UPPER));
   echo BR;
   $cars=array("Volvo ","BMW ","Toyata ","Honda ","Mercedes ","Opel ");
   foreach(array_chunk($cars, 2) as $key => $car){
     echo BR;
     echo $car[0];

   }

   ?>
        <h2>Сайн байна уу та бүхэнд өнөөдрөөс хичээл зааж эхэлнээ</h2>
        <?php
         $a = array(
           array(
             'id'=>5698,
             'first_name' => 'Peter',
             'last_name' => 'Griffin',
           ),
           array(
             'id'=>4767,
             'first_name' => 'Dembee',
             'last_name' => 'Munkhdulam',
           ),
           array(
             'id'=>5698,
             'first_name' => 'Joe',
             'last_name' => 'Doe',
           )
         );
         $last_names = array_column($a, 'last_name', 'id');
         print_r($last_names);
         echo "<br>";

          $fname=array("Peter","Ben","Joe");
          $age=array("35","37","43");
          $c=array_combine($fname,$age);
          print_r($c);
        ?>
        <p>Энэ бол ШХАБ д элсэх тухай асуудал байнаа. Монгол эх орон бол бидний гэр тийм учираас</p>
        <button type="button">Click me</button>
        <?php
        echo BR;
          $a = array("Apple", "Banana", "Orange", "Kiwi", "Kiwi");
          print_r(array_count_values($a));
              echo BR;
              echo BR;
          $a1=array("a"=>"red","b"=>"green","c"=>"white","d"=>"yellow");
          $a2=array("e"=>"red","f"=>"green","g"=>"blue");

          $result=array_diff($a1,$a2);
          print_r($result);
          echo BR;

          function myfunction($a,$b)
            {
            if ($a===$b)
              {
              return 0;
              }
              return ($a>$b)?3:-1;
            }

            $a1=array("a"=>"red","b"=>"green","c"=>"blue");
            $a2=array("d"=>"red","b"=>"green","e"=>"blue");

            $result=array_diff_uassoc($a1,$a2,"myfunction");
            print_r($result);
        ?>
        <div id="demo">
          <p></p>
        </div>
        <?php
           $a = array_fill(3,4,"blue");
           $b = array_fill(0,1,"blue");

           print_r($a);
           echo BR;
           print_r($b);

           echo BR;

           $keys = array("w","r","s","f");
           $a = array_fill_keys($keys, "blue");
           print_r($a);

           echo BR;
           //-------------array_filter----------------------------------------

           function my_filter($i){

             return strlen($i)==1;

           }

           $x = array('dog', 'cat', 'lion', 'tiger', 'eagle', 'elepant');
           $z = array_filter($x, "my_filter");
           echo '<pre>';
           print_r($z);
           echo '</pre>';
          //---------array_keys-------------------------------

            $z=array(10,20,30,40,50,60,70,80,90,"20");
            print_r(array_keys($z,"20",false));
            echo "google";
            echo BR;
            $a1 = array("a"=>"red","b"=>"green","c"=>"white","d"=>"blue","e"=>"yellow","f"=>"black","g"=>"pink");
            $a2 = array("a"=>"purple","b"=>"orange");
            array_splice($a1,2,2,$a2);
            echo "<pre>";
            print_r($a1);
            echo BR;
            function myfunction1($a,$b)
                {
                if ($a===$b)
                  {
                  return 0;
                  }
                  return ($a>$b)?1:-1;
                }

                $a1=array("a"=>"red","b"=>"green","c"=>"blue");
                $a2=array("a"=>"white","b"=>"yellow","e"=>"orange");

                $result=array_udiff($a1,$a2,"myfunction1");
                print_r($result);
                echo BR;
                function myfunction2($divide)
                {
                  return(sqrt($divide));
                }
                $t = array(25,36,49);
                print_r(array_map("myfunction2",$t));

                $fname = "Dembee";
                $lname = "Munkhdulam";
                $location = "Mongolia";
                $age = "34";

                $name = array("fname","lname");
                $result = compact($name,"location","age");

                print_r($result);
                echo BR;

                $people = array("Gegeelen", "Gegeelen","Ijilee","Munkhbat");
                print_r(each($people));
                echo BR;

                //-----------------each--------------------
                $people = array("Peter","Joe","Glenn","Cleveland");

                reset($people);

                while(list($key,$val) = each($people))
                {
                  echo "$key тэй утга нь $val<br>";
                }
                echo BR;

                $people = array("Peter", "Joe", "Glenn", "Cleveland");

                echo "<strong>".current($people)."</strong>"." = The current element is Peter " . "<br>"; // The current element is Peter
                echo next($people) ." = The next element of Peter is Joe". "<br>"; // The next element of Peter is Joe
                echo current($people)." = Now the current element is Joe" . "<br>"; // Now the current element is Joe
                echo prev($people)." = The previous element of Joe is Peter" . "<br>"; // The previous element of Joe is Peter
                echo end($people)." = The last element is Cleveland" . "<br>"; // The last element is Cleveland
                echo prev($people)." = The previous element of Cleveland is Glenn" . "<br>"; // The previous element of Cleveland is Glenn
                echo current($people). " = Now the current element is Glenn". "<br>"; // Now the current element is Glenn
                echo reset($people)." = Moves the internal pointer to the first element of the array, which is Peter" . "<br>"; // Moves the internal pointer to the first element of the array, which is Peter
                echo next($people)." = The next element of Peter is Joe" . "<br>" . "<br>"; // The next element of Peter is Joe

                print_r (each($people)); // Returns the key and value of the current element (now Joe), and moves the internal pointer forward

                $a1 = "Original";
                $my_array = array("a" => "Cat", "b" => "Dog", "c" => "Horse");

                extract($my_array, EXTR_PREFIX_SAME, "dup");

                echo "\$a = $a1; \$b = $b; \$c = $c; \$dup_a = $dup_a";

        ?>
 </body>
</html>
<script>
$(document).ready(function(){
    var bich = $('p');
    bich.text('Энэ бол ар гурван сайхан сайхны нутаг ч билүү');
    bich.addClass('uguulber');
    $('body').append(bich);
    $('button').click(function(e){
      e.preventDefault();
      $('#demo').append("var <br />");
    })
});
</script>
