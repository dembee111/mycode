<?php
  $data="hello world";
  echo $data = trim($data, "hed");
  echo '</br>';
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);
  echo $data;

 ?>
