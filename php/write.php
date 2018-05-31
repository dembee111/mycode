<?php

$file = 'text.txt';

if(is_writable($file)){
  echo 'the file is writable';
}else{
  echo 'the file is not writable';
}


?>
