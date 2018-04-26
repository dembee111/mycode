<?php

class ABC
{
  private $array = ['abc'=>'ABC Variable', 'xyz' =>'XYZ Variable','isActive'=>false];
  // public $data = 'Data variable in ABC Class';

  public function createUser()
  {

    echo "im in create user function."."<br/>";
  }
  public function updateUser(){
    //Update user
  }

  public function __call($name, $array)
  {
       // echo "You are trying to call a function named: $name. with following parameters";
       // print_r($array);
       // if(array_key_exists($name, $array));
       // return $this->array[$name];
       echo "Trying to access function name is $name";
       echo "<pre>";
       foreach($array =>$key as $d)
       {
         <!DOCTYPE html>
         <>
         <table>
         <th>
         <tr>
           $key
           </tr>
         </th>
         <tb>
         <tr>
         $d
         </tr>
         </tb>
         </table>
       }
  }

public function __get($name)
{
  if(array_key_exists($name, $this->array))
  {
    return $this->array[$name];
  }else
  {
    return "Trying to access non-existing varable: $name";
  }

}
public function __set($name, $value)
{
      if(array_key_exists($name, $this->array)){
        return $this->array[$name] = $value;
      }else{
        echo "Invalid data member: $name. cannot set value";
      }
}

  // public function __construct($data)
  //     {
  //         echo "Got value: $data in counstructor function.";
  //     }
}

?>
