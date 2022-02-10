<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\Repository\PullRequest;

use ApiClients\Client\Github\Resource\Repository\PullRequest\Rb as BaseRb;
use ApiClients\Client\Github\Resource\Repository\PullRequest\RbInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Rb extends BaseRb
{
    public function refresh(): Rb
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(static function (RbInterface $rb) {
            return $rb->refresh();
        }));
    }
}
