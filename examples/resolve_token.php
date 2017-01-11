<?php

$keyFile = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'token.php';

if (!file_exists($keyFile)) {
    echo 'No key file find, copy token.sample.php to token.php and add a token from https://github.com/settings/tokens to run examples.', PHP_EOL;
    exit(1);
}

return require $keyFile;
