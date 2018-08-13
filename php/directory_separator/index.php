<?php

class A{

  const MY_CONST = DIRECTORY_SEPARATOR;

  public function my_const_self(){
    return self::MY_CONST;
  }

  public function my_const_static(){
    return static::MY_CONST;
  }
}


// class B extends A{
//   const MY_CONST = false;
// }
// $b = new B();
//
// echo $b->my_const_self() ? 'yes' : 'no';
// echo '<br/>';
// echo $b->my_const_static() ? 'yes' : 'no';
 ?>
