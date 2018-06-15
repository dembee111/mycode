<?php

$connect = new PDO("mysql:host = localhost; dbname=lombard; charset=utf8",  "root", "");
switch(connection_status()){
  case CONNECTION_NORMAL:
      $txt = "Холболт хэвийн байна";
      break;
  case CONNECTION_ABORTED:
      $txt = 'Холболт тасарлаа';
      break;
  case CONNECTION_TIMEOUT:
      $txt = 'Холболт тодохойгүй боллоо';
      break;
      case (CONNECTION_ABORTED & CONNECTION_TIMEOUT):
          $txt = 'Холболт тодохойгүй болон тасарвал боллоо';
          break;
      default:
          $txt = 'Unknown';
          break;
}
echo $txt;

// mysql_set_charset('utf8', $connect);

?>
