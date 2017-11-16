<?php declare(strict_types=1);

$keyFile = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'appveyor-key.php';

if (!file_exists($keyFile)) {
    echo 'No key file found, copy key.sample.php to key.php and add API token from https://ci.appveyor.com/api-token to run examples.', PHP_EOL;
    exit(1);
}

return require $keyFile;
