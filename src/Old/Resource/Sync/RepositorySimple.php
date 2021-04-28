<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync;

use ApiClients\Client\Github\Resource\RepositorySimple as BaseRepositorySimple;
use ApiClients\Client\Github\Resource\RepositorySimpleInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class RepositorySimple extends BaseRepositorySimple
{
    public function refresh(): RepositorySimple
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(function (RepositorySimpleInterface $repositorySimple) {
            return $repositorySimple->refresh();
        }));
    }
}
