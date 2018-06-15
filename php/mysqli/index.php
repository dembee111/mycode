<?php

const BR = "<br />";

$con=mysqli_connect("localhost","root","","lombard");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//---mysqli_affected_rows--------------

// // Perform queries and print out affected rows
// mysqli_query($con,"SELECT * FROM zturul");
// echo "Affected rows: " . mysqli_affected_rows($con);
// echo BR;
// mysqli_query($con,"DELETE FROM zturul WHERE zturul_id>0");
// echo "Affected rows: " . mysqli_affected_rows($con);
//
// mysqli_close($con);

//------------Automataar holbogdoh heseg gehuudee------------------

// mysqli_autocommit($con,FALSE);
//
// // Insert some values
// mysqli_query($con,"INSERT INTO names (first_name,last_name,age)
// VALUES ('Peter','Griffin',35)");
// mysqli_query($con,"INSERT INTO names (first_name,last_name,age)
// VALUES ('Glenn','Quagmire',33)");
//
// // Commit transaction
// mysqli_commit($con);
//
// mysqli_change_user($con, "root", "", "urgoo");
// Close connection

//-------------Database aas file haih -------------------------

$sql="SELECT * FROM honog";

if ($result=mysqli_query($con,$sql))
  {
  // Seek to row number 15
  mysqli_data_seek($result,20);

  //Fetch row
  $row=mysqli_fetch_row($result);

  echo "<pre/>";
  var_dump($row);



  // printf ("Өөрийн нэр: %s <br /> Нас: %s\n", $row[0], $row[1]);
  //
  // // Free result set
  // mysqli_free_result($result);
}

mysqli_close($con);

?>
