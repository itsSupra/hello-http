<?php

require_once dirname(__DIR__) . '/bootstrap.php';
/** @var \Monolog\Logger $logger */

$logger->debug('Hello http!');

echo 'Hello world!' . PHP_EOL;
