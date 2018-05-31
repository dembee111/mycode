<?php

$var='pie';

if(empty($var)){
  echo '$var хувьсагч хоосон байна';
}else{
   echo '$var хувьсагч утга байна';
}
echo str_replace("world","Peter","Hello world");
echo "In this example, we search for the string "Hello world!", find the value "world" and then replace the value with "Peter"";
echo '<br/>';
echo '<br/>';
echo '<br/>';
$expected_array_got_string = 'somestring';
var_dump(empty($expected_array_got_string['some_key']));
var_dump(empty($expected_array_got_string[0]));
var_dump(empty($expected_array_got_string['0']));
var_dump(empty($expected_array_got_string[0.5]));
var_dump(empty($expected_array_got_string['0.5']));
var_dump(empty($expected_array_got_string['0 Mostel']));
echo '<br/>';
echo '<br/>';
echo '<br/>';
$huwi='hihi';

if(!isset($huwi)){
  echo '$var хувьсагч хоосон байна';
}else{
   echo '$var хувьсагч утга байна';
}
?>
