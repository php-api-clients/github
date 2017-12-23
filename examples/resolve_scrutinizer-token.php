<?php declare(strict_types=1);

$keyFile = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'scrutinizer-token.php';

if (!file_exists($keyFile)) {
    echo 'No key file find, copy token.sample.php to token.php and add a token ',
         'from https://scrutinizer-ci.com/profile/applications to run examples.', PHP_EOL;
    exit(1);
}

return require $keyFile;
