<?php

use ApiClients\Client\Github\AsyncClient;
use ApiClients\Client\Github\Resource\Async\Contents\File;
use ApiClients\Client\Github\Resource\Async\Repository;
use ApiClients\Client\Github\Resource\Async\User;
use ApiClients\Client\Github\Resource\Contents\FileInterface;
use React\EventLoop\Factory;
use function ApiClients\Foundation\resource_pretty_print;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();

$client = AsyncClient::create($loop, require 'resolve_token.php');

$client->user($argv[1] ?? 'php-api-clients')->then(function (User $user) use ($argv) {
    resource_pretty_print($user);
    return $user->repository($argv[2] ?? 'github');
})->done(function (Repository $repository) {
    $repository->contents()->filter(function ($resource) {
        return $resource instanceof FileInterface;
    })->take(1)->subscribeCallback(function ($content) {
        $content->refresh()->done(function (File $content) {
            resource_pretty_print($content, 1, true);
            if ($content->encoding() === 'base64') {
                echo PHP_EOL, base64_decode($content->content()), PHP_EOL;
            } else {
                echo PHP_EOL, 'File encoded as "', $content->encoding(), '", we don\'t support that in this example', PHP_EOL;
            }
        });
    }, function ($error) {
        echo (string)$error;
    });
});

$loop->run();
