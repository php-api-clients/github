<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync;

use ApiClients\Client\Github\Resource\Meta as BaseMeta;
use ApiClients\Client\Github\Resource\MetaInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Meta extends BaseMeta
{
    public function refresh(): Meta
    {
        return $this->wait($this->handleCommand(
            new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
        )->then(static function (MetaInterface $meta) {
            return $meta->refresh();
        }));
    }
}
