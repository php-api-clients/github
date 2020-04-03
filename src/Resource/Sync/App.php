<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync;

use ApiClients\Client\Github\Resource\App as BaseApp;
use ApiClients\Client\Github\Resource\AppInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class App extends BaseApp
{
    public function refresh(): App
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(function (AppInterface $app) {
            return $app->refresh();
        }));
    }
}
