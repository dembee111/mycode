<?php

function __autoload($className)

{
  include_once "classes/$className.php";
}

$abc = new ABC('dembee');

$abc->demo('minion','avangers','angry birds');
// $abc->abc = "Value of abc variable changed";
// $abc->create('param1','param2','param3');



?>
