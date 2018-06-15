<?php

$dir = "../mongol";

// Open a directory, and read its contents
if (is_dir($dir))
{
      if ($dh = opendir($dir))
      {
              while (($file = readdir($dh)) !== false)
                    {
                      echo "filename:" . $file . "<br>";
                    }
                    rewinddir();
                    while (($file = readdir($dh)) !== false){
                      echo "filename:" . $file . "<br>";
                    }
              closedir($dh);
      }
}
echo $test;
echo "<pre>";
print_r(error_get_last());

$path1 = "../mongol/index.php";

echo basename($path1) . "<br />";

echo basename($path1,".php");

echo filesize("foo.txt");
echo copy("index.php", "foo.txt");
echo "<br/>";
$size =  disk_total_space("C:");

  if($size >= 1073741824)
  {
    $size = number_format($size / 1073741824, 2) . ' GB';
  }
  else if($size >= 1048576)
  {
     $size = number_format($size / 1048576, 2) . ' MB';
  }
  else if($size >= 1024)
  {
    $size = number_format($size / 1024, 2) . ' KB';
  }
  else if($size > 1)
  {
    $size = $size . ' bytes';
  }
  else if($size == 1)
  {
    $size = $size . ' byte';
  }
  else
  {
    $size = ' 0 bytes';
  }
  echo "C: дискний сул хэмжээ: ". $size;
  echo "<br />";

  $foo = fopen("foo.txt", "r");
  $line = fgets($foo);
  while(! feof($foo))
  {
    echo $line."<br />";
    $line = fgets($foo);
  }
  fclose($foo);


  // fclose($foo);

// if (is_dir($dir))
// {
//   echo 'folder bn shdee olchloo';
// }
// else
// {
//   echo 'folder bhgui bnaa olsongui';
// }

?>
