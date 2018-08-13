<?php
require 'init.php';
class Config{


    public static function get($path=null)
        {

            if($path){
              $config = $GLOBALS['config'];
              $path = explode('/', $path);


              foreach($path as $bit)
                  {
                        if(isset($config[$bit])){

                          $config  = $config[$bit];

                        }
                  }
                  return $config;
            }
            return $config;
        }

}
echo '<pre>';
print_r (Config::get('123'));
 ?>
