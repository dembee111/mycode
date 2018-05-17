 <?php

class ABC //класс зарлах
{

public function __toString()
{
  return get_class($this);
}
    public static function __callstatic($name,$array)
    {
        echo "Trying to access a static function named is $name";
        echo '<pre>';
        print_r($array);
    }

    public function __call($name, $array)
    {
       echo "Trying to access function name is $name";
       echo '<pre>';
       print_r($array);
    }


}

?>
