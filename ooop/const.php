<?php

include 'index.php';

define(MY_CONSTANT, 'aMemberVar');

print $foo->{MY_CONSTANT}.'<br />';
print $foo->{'aMemberVar'};

print $foo->{$otherObj->var};
print $foo->{$otherObj-->func()};

?>
