<?php

require_once 'app/User.php';
require_once 'library/Library.php';

$testAja = new \App\test\User();
$testAja2 = new \Library\test\User();

$testAja->sayHello();

?>