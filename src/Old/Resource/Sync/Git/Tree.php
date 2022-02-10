<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\Git;

use ApiClients\Client\Github\Resource\Git\Tree as BaseTree;
use ApiClients\Client\Github\Resource\Git\TreeInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Tree extends BaseTree
{
    public function refresh(): Tree
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(static function (TreeInterface $tree) {
            return $tree->refresh();
        }));
    }
}
