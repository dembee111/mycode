<?php

require 'Tv.php';

$tv_one = new TV;
$tv_two = new TV;

$tv_one->volumeUp();
$tv_one->volumeUp();
$tv_one->volumeUp();

echo $tv_one->volume;
echo "<br />";
echo "<br />";
echo $tv_two->volume;

?>
