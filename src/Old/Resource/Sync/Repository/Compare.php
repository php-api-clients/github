<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\Repository;

use ApiClients\Client\Github\Resource\Repository\Compare as BaseCompare;
use ApiClients\Client\Github\Resource\Repository\CompareInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Compare extends BaseCompare
{
    public function refresh(): Compare
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(static function (CompareInterface $compare) {
            return $compare->refresh();
        }));
    }
}
