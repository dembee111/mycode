<?php

include 'instance1.php';

$instance= new SimpleClass();

$assigned = $instance;
$reference =& $className();

$instance->var = '$assigned will have this value';

$instance = null;

var_dump($instance);
var_dump($reference);
var_dump($assigned);

?>
