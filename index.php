<?php
require __DIR__ . '/vendor/autoload.php';

use App\Test;

$obj = new Test();
$data = $obj->run();
\print_r($data);
