<?php declare(strict_types=1);

use ApiClients\Client\Github\AsyncClient;
use React\EventLoop\Factory;
use React\Stream\ThroughStream;

require \dirname(__DIR__) . \DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = AsyncClient::create($loop, require 'resolve_token.php');

$stream = new ThroughStream();
$client->renderMarkdown($stream, 'gfm', 'github/gollum')->done(function ($contents) {
    echo $contents;
}, 'display_throwable');

$loop->addTimer(1, function () use (&$stream) {
    $stream->end('Hello world github/linguist#1 **cool**, and #1!');
});

$loop->run();
