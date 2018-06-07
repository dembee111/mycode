
<?php


$email = $_POST["email"];
$name = $_POST['name'];
$a1 = array("1"=>"batdemberel","2"=>"batdemberel_sh@yahoo.com");



if(array_key_exists($name,$a1)){

        if(array_unique($a1)){
          echo "файл таарч байна";
        }
        else{
          echo "Файл таарахгүй байна";
        }
      }else{
        echo "Таарсангүй";
     }


?>
