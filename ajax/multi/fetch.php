<?php

$connect = mysqli_connect("localhost", "root", "", "testing");
mysqli_set_charset($connect,"utf8");

$output = '';
$query = 'SELECT * FROM content order by item_id desc';
$result = mysqli_query($connect, $query);
$output .= '
    <br/>
    <h3 align="center">Item data</h3>
    <table class="table table-bordered table-striped">
    <tr>
        <th width="30%">Item Name</th>
        <th width="10%">Item code</th>
        <th width="50%">Description</th>
        <th width="10%">Price</th>
    </tr>
';

while($row = mysqli_fetch_array($result))
{
  $output .= '
  <tr>
     <td>'.$row["item_name"].'</td>
     <td>'.$row["item_code"].'</td>
     <td>'.$row["item_description"].'</td>
     <td>'.$row["item_price"].'</td>
   </tr>
  ';
}
$output .= '</table>';
echo $output;
?>
