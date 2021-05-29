<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\RateLimit;

use ApiClients\Client\Github\Resource\RateLimit\Resources as BaseResources;
use ApiClients\Client\Github\Resource\RateLimit\ResourcesInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Resources extends BaseResources
{
    public function refresh(): Resources
    {
        return $this->wait(
            $this->handleCommand(
                new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
            )->then(static function (ResourcesInterface $resources) {
                return $resources->refresh();
            })
        );
    }
}
