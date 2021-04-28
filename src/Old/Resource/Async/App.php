<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async;

use ApiClients\Client\Github\Resource\App as BaseApp;

class App extends BaseApp
{
    public function refresh(): App
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
