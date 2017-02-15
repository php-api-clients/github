<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Repository;

use ApiClients\Client\Github\Resource\Repository\Branch as BaseBranch;

class Branch extends BaseBranch
{
    public function refresh() : Branch
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
