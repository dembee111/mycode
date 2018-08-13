<?php

abstract class def{
  public $data;

  private function test1(){
    echo 'test1';
  }
}

/**
 *
 */
interface a
{
  public function abc();


}

interface b{

  public function xyz();

}
//-------  c class --------


class c implements a,b{

    public function zahia(){
      echo 'tanid zahia irlee';
    }


    public function abc()
    {
      echo 'abc function';
    }


    public function xyz()
    {
      echo 'xyz function';
    }

}
$c = new c;
$c->abc();
echo "<br />";
$c->xyz();
echo "<br />";
$c->zahia();


?>
