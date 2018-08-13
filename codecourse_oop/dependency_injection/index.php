<?php

require 'Chest.php';

require 'Lock.php';

$chest = new Chest(new Lock);

$chest->close();
echo "<br />";
$chest->open();


?>
