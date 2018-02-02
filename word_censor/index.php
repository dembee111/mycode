<?php

require 'input.php';

$find = array('pisda', 'shees', 'nohoi');
$replace= array('p***a', 's***s', 'n***i');

if (isset($_POST['user_input'])&&!empty($_POST['user_input'])){
  $user_input = $_POST['user_input'];
  $user_input_new = str_ireplace($find, $replace, $user_input);

  echo '<strong>Та хориотой үг хэрэглэсэн байна: </strong>'.$user_input_new;
}
?>
