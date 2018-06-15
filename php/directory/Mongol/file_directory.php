<?php
const BR = "<br />";

$file = fopen("index.php", "r");
echo fgetss($file, 1024, "<h2>");
fclose($file);

// while (! feof ($file))
// {
//   echo fgets($file);
//   // print_r(fgetcsv($file));
// }
//
// fclose($file);
$file = fopen("index.txt", "w+");

if(flock($file,LOCK_EX))
{
  fwrite($file, "write something");

  flock($file, LOCK_UN);
}
else
{
  echo "Error locking file!";
}
fclose($file);
echo BR;
if(file_exists("index.txt"))
{
  echo file_get_contents("index.txt");
  echo BR;
  echo "Сүүлд орсон: ".date("F d Y H:i:s.", filectime("index.txt"));
}
else {
  echo "baihgui l bainadaa";
}

$txt = "My car is darkgrey...";
if(fnmatch("*gr[ae]y", $txt))
{
  echo "some form of gray....";
}
$file = fopen("index.txt", "r");
$oops = fread($file, filesize("index.txt"));
echo $oops;
fclose($file);

$lut = fopen("index.txt", "r");

fgets($lut);
echo BR;
echo fseek($lut, 0);

$lag= fopen("index.txt", "r");

print_r(fstat($lag));
echo BR;
echo "<pre>";
fclose($lag);

echo BR;
echo BR;
echo filesize("index.txt");
echo BR;

$file = fopen("index.txt", "a+");
ftruncate($file, 20);
fclose($file);

clearstatcache();
echo filesize("index.txt");
echo BR;
$fat = "foo2.txt";
if(is_file($fat))
{
  echo ("$fat is a regular file");
}
else
{
  echo ("$fat is not regular file");
}

// echo rename("ups.php", "index.php");

// $path = "marsh";
// if(rmdir($path))
// {
//   echo " ustgaj chadlaa";
// }
echo BR;
$stat = stat('index.txt');
$nn = $stat['mtime'];
$neg = date('Y-M-d H:i:s', $nn);

echo "Сүүл хандсан хандалтын цаг: ".$neg;
//
// $dollar = file_get_contents($folder);
//
// echo $dollar;
//
// echo touch("index.txt");

// $site ="https://www.sodonsolution.com";
// echo fopen($site, "w+") or die("холбогдох болотжгүй байна даа яахуу?");
echo BR;
$string = "гайхалтай";
$time = "өвөл";

$str = 'Энэ бол $string $time өглөө байна ';

echo $str;
echo BR;


echo $str;
echo BR;
eval("\$str = \"$str\";");
echo $str;
echo BR;

highlight_file("../../../urgoo/index.php");
echo php_strip_whitespace("../../../jQuery/tester/index.php");
show_source("../../../urgoo/index.php");



?>
