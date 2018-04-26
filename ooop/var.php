<?php

include 'index.php';

function getVarName(){
  return 'aMemberVar';
}

print $foo->{getVarName()};

?>
