<?php
// turn on all errors
error_reporting(E_ALL);

$autoloader = dirname(dirname(__DIR__)) . '/vendor/autoload.php';
if (! file_exists($autoloader)) {
    echo "Composer autoloader not found: $autoloader" . PHP_EOL;
    echo "Please issue 'composer install' and try again." . PHP_EOL;
    exit(1);
}
require $autoloader;
require_once dirname(dirname(__DIR__)) . '/vendor/aura/di/tests/_Config/AbstractContainerTest.php';
