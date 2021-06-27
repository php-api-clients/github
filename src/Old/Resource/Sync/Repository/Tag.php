<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\Repository;

use ApiClients\Client\Github\Resource\Repository\Tag as BaseTag;
use ApiClients\Client\Github\Resource\Repository\TagInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Tag extends BaseTag
{
    public function refresh(): Tag
    {
        return $this->wait(
            $this->handleCommand(
                new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
            )->then(static function (TagInterface $tag) {
                return $tag->refresh();
            })
        );
    }
}
