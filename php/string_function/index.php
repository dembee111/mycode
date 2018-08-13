<?php

$number = 123000;
$file = fopen("foo.php", "w");
vfprintf($file, "with 2 decimals: %1\$.3f\nWith no decimals:%1\$u", array($number));
?>
