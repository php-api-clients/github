<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\Git;

use ApiClients\Client\Github\Resource\Git\Commit as BaseCommit;
use ApiClients\Client\Github\Resource\Git\CommitInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Commit extends BaseCommit
{
    public function refresh(): Commit
    {
        return $this->wait($this->handleCommand(
            new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
        )->then(static function (CommitInterface $commit) {
            return $commit->refresh();
        }));
    }
}
