<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync;

use ApiClients\Client\Github\Resource\Tree as BaseTree;
use ApiClients\Client\Github\Resource\TreeInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Tree extends BaseTree
{
    public function refresh(): Tree
    {
        return $this->wait($this->handleCommand(
            new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
        )->then(function (TreeInterface $tree) {
            return $tree->refresh();
        }));
    }
}
