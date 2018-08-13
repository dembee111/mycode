<?php

require 'Bird.php';
require 'Pigeon.php';
require 'Penguin.php';

// $pigeon = new Pigeon(true, 2);
//
// if($pigeon->canFly()){
//
//   echo 'Can Fly';
//
// }
// else
// {
//   echo "Энэ шувуу нисч чадахгүй л юм байна даа";
// }
// echo "<br />";

$penguin = new Penguin(false, 2);

$penguin->foo();

$penguin->getLegCount();
?>
