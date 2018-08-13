<?php

$conn = mysqli_connect("localhost", "root", "", "testing");

$query = "SELECT * FROM account";
$result = mysqli_query($conn, $query);

$chart_data = '';
while($row = mysqli_fetch_array($result))
{
  $chart_data .= "{ year: '".$row['year']."', profit:".$row["profit"].", purchase: ".$row["purchase"].", sale: ".$row["sale"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>

   <title>charts</title>


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

  </head>
  <body>
     <br/><br/>
     <div class="container" >

        <h2 align="center">Morris.js chart with PHP & Mysql</h2>
        <h3>Last 10 Years Profit, Purchase and Sale Data</h3>
        <br/><br/>

        <div id="myfirstchart" style="height: 600px;"></div>
     </div>
     <script>
     Morris.Area({
     // ID of the element in which to draw the chart.
     element: 'myfirstchart',
     // Chart data records -- each entry in this array corresponds to a point on
     // the chart.
     data: [
       <?php echo $chart_data; ?>
     ],
     // The name of the data record attribute that contains x-values.
     xkey: 'year',
     // A list of names of data record attributes that contain y-values.
     ykeys: ['profit', 'purchase', 'sale'],
     // Labels for the ykeys -- will be displayed when you hover over the
     // chart.
     labels: ['Profit', 'Purchase', 'Sale']

   });

     </script>
  </body>
</html>
