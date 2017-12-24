<?php declare(strict_types=1);

$keyFile = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'travis-key.php';

if (!file_exists($keyFile)) {
    echo 'No key file find, copy key.sample.php to key.php and add access ',
        'token from https://blog.travis-ci.com/2013-01-28-token-token-token/',
        ' to run examples.', PHP_EOL;
    exit(1);
}

return require $keyFile;
