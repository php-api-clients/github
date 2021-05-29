<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\Repository\Commit;

use ApiClients\Client\Github\Resource\Repository\Commit\Status as BaseStatus;
use ApiClients\Client\Github\Resource\Repository\Commit\StatusInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Status extends BaseStatus
{
    public function refresh(): Status
    {
        return $this->wait($this->handleCommand(
            new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
        )->then(static function (StatusInterface $status) {
            return $status->refresh();
        }));
    }
}
