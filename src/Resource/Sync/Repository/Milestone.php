<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\Repository;

use ApiClients\Client\Github\Resource\Repository\Milestone as BaseMilestone;
use ApiClients\Client\Github\Resource\Repository\MilestoneInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Milestone extends BaseMilestone
{
    public function refresh(): Milestone
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(function (MilestoneInterface $milestone) {
            return $milestone->refresh();
        }));
    }
}
