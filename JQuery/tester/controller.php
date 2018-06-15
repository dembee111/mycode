<?php
      include('database.php');
      // mysql_set_charset('utf-8');
      $query = "
      SELECT * FROM zturul
      ORDER BY name ASC
      ";

      $statement = $connect->prepare($query);

      $statement->execute();

      $result = $statement->fetchAll();





?>
