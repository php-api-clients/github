<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\Repository\Commit;

use ApiClients\Client\Github\Resource\Repository\Commit\File as BaseFile;
use ApiClients\Client\Github\Resource\Repository\Commit\FileInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class File extends BaseFile
{
    public function refresh(): File
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(function (FileInterface $file) {
            return $file->refresh();
        }));
    }
}
