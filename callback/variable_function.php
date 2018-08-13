<?php
require "index.php";


 function gogo(){
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $sar = $_POST['sar'];
  }
  $today = date('Y-m-d');

      if($sar == 30){

        echo $enddate = date('Y-m-d', strtotime($today.'+ 30 days'));

      }
      elseif($sar == 14)
      {
        echo $enddate = date('Y-m-d', strtotime($today.'+ 14 days'));
      }
      elseif($sar== 10)
      {
         echo $enddate = date('Y-m-d', strtotime($today.'+ 10 days'));
      }
      elseif($sar == 7)
      {
         echo $enddate = date('Y-m-d', strtotime($today.'+ 7 days'));
      }
}
function agree(){
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $sungah = $_POST['sungah'];

    if($sungah)
  }
}
echo "<h3>".gogo()."</h3>";







function www()
{
  $today = date('Y-m-d');

$sar= '';

//   if($sar == 30){
//
//     $enddate = date('Y-m-d', strtotime($today.'+ 30 days'));
//
//   }
//   elseif($sar == 14)
//   {
//     $enddate = date('Y-m-d', strtotime($today.'+ 14 days'));
//   }
//   elseif($sar== 10)
//   {
//     $enddate = date('Y-m-d', strtotime($today.'+ 10 days'));
//   }
//   elseif($sar == 7)
//   {
//     $enddate = date('Y-m-d', strtotime($today.'+ 7 days'));
//   }
// return $enddate;




}

$func_name = "www";

if(is_callable($func_name)){


   www();

}else{
  echo "function {$func_name} is not callable";
}


?>
