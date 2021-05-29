<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\Git;

use ApiClients\Client\Github\Resource\Git\NamedBlob as BaseNamedBlob;
use ApiClients\Client\Github\Resource\Git\NamedBlobInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class NamedBlob extends BaseNamedBlob
{
    public function refresh(): NamedBlob
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(static function (NamedBlobInterface $namedBlob) {
            return $namedBlob->refresh();
        }));
    }
}
