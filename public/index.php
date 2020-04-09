<?php

require_once '../vendor/autoload.php';

use App\wcs\Hello;
use HelloWorld\SayHello;

$hi = new Hello();
echo $hi->Talk() . "<br>";

$hello = new SayHello();
echo $hello->world();