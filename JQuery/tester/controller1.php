<?php

include('database.php');

if(isset($_POST["selected"]))
{
 $id = join("','", $_POST["selected"]);
 // $query = "
 // SELECT hugatsaa FROM honog
 // WHERE zturul_id IN ('".$id."')
 // ";
 // SELECT * FROM honog WHERE zturul_id GROUP BY hugatsaa;
 $query = "
 SELECT * FROM honog WHERE zturul_id = '".$_POST["selected"]."' GROUP BY hugatsaa;
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result1 = $statement->fetchAll();
 $output = '';
 foreach($result1 as $row)
 {

  $output .= '<option value="'.$row["honog_id"].'">'.$row["hugatsaa"].'</option>';

 }
 echo $output;
}


?>
