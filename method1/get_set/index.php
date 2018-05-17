<?php

// autoload функц нь тодорхой нэг хавтасд байгаа класс файлуудыг олон дахин дуудахгүйгээр
//тухайн замыг хувсагчид оноон бичиглэл ажлыг автоматжуулах нэг хэлбэр, арга юм.
function __autoload($className)

{
  include_once "classes/$className.php";
}
//abc классыг обьект болгон хэрэглэх тэр мөчлөг
$obj = new ABC();  //байгуулагч функцэд утга өгөн ашиглаж байна.
$obj1 = new XYZ(); //xyz классыг обьект болгон хэрэглэх тэр мөчлөг



 $obj->gag=" haha haha";
echo $obj->gag;

// хэвлэлт нь : abc variable utga uurchluh
?>
