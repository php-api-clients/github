<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\Contents;

use ApiClients\Client\Github\Resource\Contents\FileOperation as BaseFileOperation;
use ApiClients\Client\Github\Resource\Contents\FileOperationInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class FileOperation extends BaseFileOperation
{
    public function refresh(): FileOperation
    {
        return $this->wait(
            $this->handleCommand(
                new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
            )->then(function (FileOperationInterface $fileOperation) {
                return $fileOperation->refresh();
            })
        );
    }
}
