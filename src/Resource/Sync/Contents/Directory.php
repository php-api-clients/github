<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\Contents;

use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;
use ApiClients\Client\Github\Resource\Contents\Directory as BaseDirectory;
use ApiClients\Client\Github\Resource\Contents\DirectoryInterface;

class Directory extends BaseDirectory
{
    public function refresh() : Directory
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(function (DirectoryInterface $directory) {
            return $directory->refresh();
        }));
    }
}
