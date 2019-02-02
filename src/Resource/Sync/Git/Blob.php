<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\Git;

use ApiClients\Client\Github\Resource\Git\Blob as BaseBlob;
use ApiClients\Client\Github\Resource\Git\BlobInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Blob extends BaseBlob
{
    public function refresh(): Blob
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(function (BlobInterface $blob) {
            return $blob->refresh();
        }));
    }
}
