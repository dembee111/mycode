<?php
const BR = "<br />";
function test_odd($var){
  return($var & 3);
}
$a1 = array("0", "1", "2", "3", "4", "5", "6");
print_r(array_filter($a1, "test_odd"));
echo "<br />";
echo "<br />";

$file = "bold";

if(is_dir($file))
{
  echo ("$file is a directory");

}
else {
  echo ("$file is not a directory");
}
echo BR;
echo "<pre>";
$dir = "fda";

$g = scandir($dir, 1);

print_r($g);


?>