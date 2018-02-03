<?php

//Objects

$dembee = new stdClass;

$dembee->name = 'batdemberel';
$dembee->age = '32';
$dembee->gender ='male';

echo $dembee->age.'<br>';

$object = new stdClass;

$object->names = ['John', 'Billy', 'Susan', 'Max'];


  foreach ($object->names as $name)

      echo $name . '<br>';








?>
