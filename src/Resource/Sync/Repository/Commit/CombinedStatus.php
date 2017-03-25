<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\Repository\Commit;

use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;
use ApiClients\Client\Github\Resource\Repository\Commit\CombinedStatus as BaseCombinedStatus;
use ApiClients\Client\Github\Resource\Repository\Commit\CombinedStatusInterface;

class CombinedStatus extends BaseCombinedStatus
{
    public function refresh() : CombinedStatus
    {
        return $this->wait($this->handleCommand(
            new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
        )->then(function (CombinedStatusInterface $combinedStatus) {
            return $combinedStatus->refresh();
        }));
    }
}
