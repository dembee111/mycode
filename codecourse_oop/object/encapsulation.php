<?php

class TV{
  public $model;
  private $volume;

  function volumeUp(){
    $this->volume++;
  }
  function volumeDown()
  {
    $this->volume--;
  }
  private function getModel()
  {
    return $this->model;
  }
  function __construct($m, $v)
  {
    $this->model = $m;
    $this->volume = $v;
  }
}
class plazmaTV extends TV{
  public function getModel()
  {
    return $this->model;
  }
}

$plazma = new plazmaTV('abc', 1);
echo $plazma->getModel();

?>
