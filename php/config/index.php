<?php
require 'config.php';

  if(isset($_REQUEST['path']))
  {

     $path = $_POST['path'];

     $object = new Config;
     $ob = $object->get($path);
    foreach ($ob as $value) {
      echo '<pre>';
      print_r($value);
    }
    }


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

        <form class="" action="index.php" method="post">
          <div class="foo">
            <label for="foo">Файлаа оруулна уу</label>
              <input type="text" name="path" value="">
          </div>
          <input type="submit" name="" value="submit">
        </form>
        <?php



         ?>



  </body>
</html>
