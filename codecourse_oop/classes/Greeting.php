<?php

class Greeting {

  public function __construct($something = 5632){

    $this->saySomething($something);

  }

  public function saySomething($something)
  {

    echo $something;

  }


}



?>
