<?php

declare(strict_types=1);

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

const LOGGER = 'logger';

require_once __DIR__ . '/vendor/autoload.php';

$logger = new Logger (LOGGER);
$logger->pushHandler(new StreamHandler('php://stdout', Logger::DEBUG));

$logger->debug('Hello bootstrap!');


