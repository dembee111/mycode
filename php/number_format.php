<?php

$mynga = "1000000";

$say = number_format($mynga, 2);
echo $say;
echo "<pre />";
echo str_replace(",", "",$say);
?>
