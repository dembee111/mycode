<?php

$x = 11;

 do {
  echo "<pre />";
  echo "Энэ бол давталт нөхцөл үнэн байх хүртэл давталт юм:.$x";
  $x++;
} while ($x <= 10);

// echo "-------------------------";
// $k = 2;
//
// while($k<=200){
//   echo "<pre />";
//   echo "Тэгш тоо: $k";
//   $k += 2;
// }

// $sum = 0;
// $count = 0;
//
// if($_SERVER['REQUEST_METHOD'] == "POST"){
//
//   echo "<br/>";
//   $too = $_POST['too'];
//   if(empty($too)){
//     echo "та тоогоо оруулна уу";
//
//   }else{
//     //Алгоритмийн эхлэл
//
//     $sum =$sum + $too;
//
//     while($count < 5){
//
//       $count = $count + 1;
//     }
//     }
//
//
//
//   }

$sum = 0 ;
$count = 0;

//утга оруулах хэсэг

if($_SERVER['REQUEST_METHOD'] == "POST"){
      echo "<br/>";
      $n = $_POST['too'];
      if(empty($n)){
        echo "та тоогоо оруулна уу";
  }
  //Алгоритмын эхлэл

while ($count < 5) {
  $sum = $sum + $n;
   $count = $count + 1;
}
echo "<br>";
echo "<br>";
echo $sum;
}


$olleh = 0;
while($olleh < 10){
  echo "<pre/>";
   echo "Hello world";
   $olleh = $olleh + 1;
}
echo "<pre/>";
echo "<p style='color:red;'>zogsson</p>";





 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>ol</title>
   </head>
   <body>
     <div class="container">
       <form class="foo" action="" method="post">
             <input type="text" name="too">
             <br>
             <button type="submit" name="button">oruul</button>
       </form>
     </div>



   </body>
 </html>
