<?php

include 'sup.php';

const BR = '</br>';
function multiply($neg, $hoyor){
    $result = $neg * $hoyor;
    return $result;
}

function print_info(array $info, $color = 'lightblue', $border=5, $bordercolor='blue', $cellpadding = 10){
 echo "<table bgcolor = '$color' border='$border'"
 ."bordercolor = '$bordercolor' cellpadding='$cellpadding'"
 ."cellspacing='0'>";

 foreach ($info as $key => $value) {
   echo '<tr><td>'.ucwords($key).'</td><td>'.$value.'</td></tr>';
 }
 if ($info['age'] > 21){
   echo '<tr><td>Alcohol</td><td>Red wine</td></tr>';

   echo '<tr><td>Random</td><td>'.multiply(rand(1,50),rand(1,50)).'</td></tr>';
 }
 echo '</table>';
}
$my_info = array('name' => 'Dembee', 'age' => 33, 'gender' => 'M', 'job' =>'Clever Techie');

print_info($my_info,'lightgreen');
echo BR;
print_info($my_info,'lightblue');
echo BR;
print_info($my_info,'pink');
echo BR;
print_info($my_info,'yellow');
?>
