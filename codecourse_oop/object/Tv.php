<?php

class TV{

  public $model = 'xyz';
  public $volume = 1;

  public function volumeUp()
  {
    $this->volume++;

  }

  public function volumeDown()
  {
    $this->volume--;

  }
}

?>
