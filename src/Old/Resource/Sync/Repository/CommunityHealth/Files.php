<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\Repository\CommunityHealth;

use ApiClients\Client\Github\Resource\Repository\CommunityHealth\Files as BaseFiles;
use ApiClients\Client\Github\Resource\Repository\CommunityHealth\FilesInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Files extends BaseFiles
{
    public function refresh(): Files
    {
        return $this->wait($this->handleCommand(
            new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
        )->then(static function (FilesInterface $files) {
            return $files->refresh();
        }));
    }
}
