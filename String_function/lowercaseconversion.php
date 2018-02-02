<?php
require 'foo.php';
$string = 'I could be any case.';

$string_lower = strtolower($string);
$string_upper =strtoupper($string);

if ($_POST["too"]==1){
  echo $string_upper;
}else{
  echo $string_lower;
}
?>
