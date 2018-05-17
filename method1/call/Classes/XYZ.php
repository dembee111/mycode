<?php

class XYZ
{

  private $array = ['abc'=>'value of abc', 'xyz'=>'value of xyz'];

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
