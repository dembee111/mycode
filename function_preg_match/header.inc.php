<h1>My page </h1>
<?php

$string= 'Thisdoesntspace';

function has_space($string){
  if (preg_match('/ /', $string)){
    return true;
  }else{
    return false;
  }
}

?>
