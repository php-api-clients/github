<?php declare(strict_types=1);
use ApiClients\Client\Github\AsyncClient;
use ApiClients\Client\Github\Resource\EmojiInterface;
use function ApiClients\Foundation\resource_pretty_print;
use React\EventLoop\Factory;

require \dirname(__DIR__) . \DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = AsyncClient::create($loop, require 'resolve_token.php');

$client->emojis()->subscribe(function (EmojiInterface $emoji) {
    resource_pretty_print($emoji);
}, 'display_throwable');

$loop->run();
