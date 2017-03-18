<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Repository;

use ApiClients\Client\Github\Resource\Repository\Commit as BaseCommit;

class Commit extends BaseCommit
{
    public function refresh() : Commit
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
