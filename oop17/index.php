<?php
class AC
{
  public $model = "xyz";
  public $speed=16;

  function SpeedUp(){
    echo $this->speed+1;
  }
  function speedDown()
  {
    echo $this->speed-1;
  }
}
$Ac_one = new AC();
echo $Ac_one->model;
$Ac_one->SpeedUp();
$Ac_one->speedDown();


?>
