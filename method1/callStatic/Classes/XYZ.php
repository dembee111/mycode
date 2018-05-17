<?php
const BR = "</br>";
class XYZ
{

  private $array = ['abc'=>'value of abc', 'xyz'=>'value of xyz'];
  public $baz="maagii";

  public function __invoke($a,$b,$c)
  {
      echo "Value of Parameter 1 :$a".BR;
      echo "Value of Parameter 2 :$b".BR;
      echo "Value of Parameter 3 :$c";

  }

public function __unset($name)
{
  unset($this->array[$name]);
}
public function __toString()
{
  return get_class($this);
}

 public function __isset($name)
 {
   if(array_key_exists($name,$this->array))
   {
     return $this->array[$name];
   }else{
     return false;
   }
 }

  public function __get($name)
  {
    if(array_key_exists($name,$this->array))
    {
      return $this->array[$name];
    }
    else
    {
      echo "trying to access non-existing variable: $name";
    }
  }

  public function __set($name, $value)
  {
    if(array_key_exists($name,$this->array))
    {
      return $this->array[$name];
    }
    else
    {
      echo "Defined access: $name";
    }
  }

}

?>
