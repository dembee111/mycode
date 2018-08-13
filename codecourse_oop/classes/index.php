<?php

require 'Person.php';
require 'Greeting.php';

$person = new Person();

$example = new Greeting();


echo $person->sentence();

?>
