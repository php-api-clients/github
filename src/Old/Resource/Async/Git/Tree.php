<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Git;

use ApiClients\Client\Github\Resource\Git\Tree as BaseTree;
use Exception;

class Tree extends BaseTree
{
    public function refresh(): Tree
    {
        throw new Exception('TODO: create refresh method!');
    }
}
