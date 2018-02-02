<?php
require 'check.php';

 if(isset($_GET['bodoh'])&&!empty($_GET['bodoh'])){
   $bodoh = $_GET['bodoh'];
   $bodoh_upper = strtoupper($bodoh);
   $bodoh_lower = strtolower($bodoh);

   if ($bodoh_lower!=$bodoh_upper){
     echo 'you are the best OK!!';
   }
 } else if ($bodoh_upper !=$bodoh_lower){
   echo "ta text ee jijgeer oruulna uu";
 } else {
   echo 'ta dahin oroldonuu';
 }

?>
