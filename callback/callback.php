<?php

function ner($string, $callback){

  $results = array(
    'upper' => ucwords($string),
    'lower' => ucwords(mb_strtolower($string)),
  );
    if(is_callable($callback)){
      call_user_func($callback, $results);
    }

}

ner('alex', function($name){
      echo $name['lower'];
});

?>
