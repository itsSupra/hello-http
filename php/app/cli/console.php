<?php

require_once dirname(__DIR__) . '/bootstrap.php';
/** @var \Monolog\Logger $logger */
/**
 * @var string $dsn
 * @var string $user
 * @var string $password
 */

$logger->debug('Hello console!');
try {

    $pdo = new PDO($dsn, $user, $password);
    $logger->debug('Hello MySQL!');


    $stmt = $pdo->query('SHOW DATABASES');
    $result = $stmt->fetchAll();
    $logger->info('Databases found' . var_export($result, 1));
} catch (PDOException $e) {
    echo $e->getMessage();
}


