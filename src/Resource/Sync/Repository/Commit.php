<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\Repository;

use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;
use ApiClients\Client\Github\Resource\Repository\Commit as BaseCommit;
use ApiClients\Client\Github\Resource\Repository\CommitInterface;

class Commit extends BaseCommit
{
    public function refresh() : Commit
    {
        return $this->wait($this->handleCommand(
            new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
        )->then(function (CommitInterface $commit) {
            return $commit->refresh();
        }));
    }
}
