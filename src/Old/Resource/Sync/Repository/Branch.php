<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\Repository;

use ApiClients\Client\Github\Resource\Repository\Branch as BaseBranch;
use ApiClients\Client\Github\Resource\Repository\BranchInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Branch extends BaseBranch
{
    public function refresh(): Branch
    {
        return $this->wait($this->handleCommand(
            new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
        )->then(function (BranchInterface $branch) {
            return $branch->refresh();
        }));
    }
}
