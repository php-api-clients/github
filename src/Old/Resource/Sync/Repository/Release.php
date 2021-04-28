<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\Repository;

use ApiClients\Client\Github\Resource\Repository\Release as BaseRelease;
use ApiClients\Client\Github\Resource\Repository\ReleaseInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Release extends BaseRelease
{
    public function refresh(): Release
    {
        return $this->wait($this->handleCommand(
            new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
        )->then(function (ReleaseInterface $release) {
            return $release->refresh();
        }));
    }
}
