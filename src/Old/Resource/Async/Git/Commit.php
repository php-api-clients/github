<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Git;

use ApiClients\Client\Github\Resource\Git\Commit as BaseCommit;
use Exception;

class Commit extends BaseCommit
{
    public function refresh(): Commit
    {
        throw new Exception('TODO: create refresh method!');
    }
}
