<?php

require 'chest.php';
require 'lock.php';

$chest = new Chest(new Lock);

$chest->close();

$chest->open();

?>
