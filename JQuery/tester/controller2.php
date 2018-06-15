<?php

include('database.php');

if(isset($_POST["songolt"]))
{
 // $id = join("','", $_POST["selected"]);
 // $query = "
 // SELECT hugatsaa FROM honog
 // WHERE zturul_id IN ('".$id."')
 // ";
 // SELECT * FROM honog WHERE zturul_id GROUP BY hugatsaa;
 $query = "
 SELECT * FROM huu WHERE honog_id = '".$_POST["songolt"]."';
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $output = '';
 foreach($result as $row)
 {
   $output .= '<input type="text"
          name="huu" id="loan_huu" class="form-control bignumber auto"
         data-v-min="0" data-v-max="30"
          data-m-dec="2" data-toggle="tooltip"
        title="Хоногт харгалзах хүү" value="'.$row.'"
        placeholder="0.00" maxlength="3">';
 }
 return json_encode($output);




 // print_r($value);
 // echo $row;
}


?>
