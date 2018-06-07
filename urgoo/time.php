<?php


  $today = date('Y-m-d');
  $day2 = date('Y-m-d',strtotime($today.'+ 1 days'));
  $day3 = date('Y-m-d',strtotime($day2.'+ 1 days'));
  $day4 = date('Y-m-d',strtotime($day3.'+ 1 days'));
  $day5 = date('Y-m-d',strtotime($day4.'+ 1 days'));
  // $array = array($today,$day2,$day3,$day4,$day5);
  // foreach($array as $a){
  //
  //     echo '<option value="">'.$a.'</option>';
  //
  // }



?>
