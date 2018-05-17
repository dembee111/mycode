 <?php

class ABC //класс зарлах
{
    private $gag;

    public function __get($name)
    {
      return $this->gag;
    }
    public function __set($name,$value)
    {
           $this->gag = $value;
    }
}

?>
