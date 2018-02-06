<?php

$time = time();
$time_now = date('D M Y @ H:i:s', $time);
$time_modifiead = date('D M Y @ H:i:s', strtotime('+1 year'));

echo 'The time now is  '.$time_now.'<br>the time modified is '.$time_modifiead;



?>
