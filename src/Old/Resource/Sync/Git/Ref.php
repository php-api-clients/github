<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\Git;

use ApiClients\Client\Github\Resource\Git\Ref as BaseRef;
use ApiClients\Client\Github\Resource\Git\RefInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Ref extends BaseRef
{
    public function refresh(): Ref
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(static function (RefInterface $ref) {
            return $ref->refresh();
        }));
    }
}
