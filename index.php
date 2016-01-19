<?php
require_once 'vendor/autoload.php';

use Cr\Command\TestCommand;

$c = new TestCommand();
$c->sayHello();
