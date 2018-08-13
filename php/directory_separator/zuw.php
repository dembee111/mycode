<?php
require 'Foo.php';

$b = new Foo();

echo $b->my_const_self() ? 'yes' : 'no';

echo $b->my_const_static() ? 'yes' : 'no';

 ?>
