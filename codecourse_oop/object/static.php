<?php

class abc {
  public  $data = 'hello world';



  public function xyz(){
     echo "hello function";
  }
}
 // abc::xyz();

 $a = new abc();

 $a->data = "object 1";

 echo $a->data;

?>
