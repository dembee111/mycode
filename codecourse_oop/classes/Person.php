<?php

class Person{

  public $name;
  public $age;


  public function __construct($name = 'Batdemberel', $age = 26)
  {
    $this->name = $name;
    $this->age = $age;

  }

  public function sentence(){

    return $this->name . ' is ' .$this->age . ' years old';

  }
}

?>
