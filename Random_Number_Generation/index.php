<?php

//$rand = rand();
//$max = getrandmax();

//echo $rand;
if (isset($_POST['roll'])){
  $rand = rand(1, 100);
  echo 'you rolled a '.$rand;
}


?>
<form action="index.php" method="POST">
      <input type="submit" name='roll' value="Roll dice.">
</form>
