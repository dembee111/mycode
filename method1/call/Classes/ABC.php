 <?php

class ABC //класс зарлах
{


    public function __call($name, $array)
    {
       echo "Trying to access function name is $name";
       echo '<pre>';
       print_r($array);
    }


}

?>
