<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\Repository\Commit;

use ApiClients\Client\Github\Resource\Repository\Commit\Check as BaseCheck;
use ApiClients\Client\Github\Resource\Repository\Commit\CheckInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Check extends BaseCheck
{
    public function refresh(): Check
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(function (CheckInterface $check) {
            return $check->refresh();
        }));
    }
}
