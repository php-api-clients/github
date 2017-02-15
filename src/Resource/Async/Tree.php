<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async;

use ApiClients\Client\Github\Resource\Tree as BaseTree;

class Tree extends BaseTree
{
    public function refresh() : Tree
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
