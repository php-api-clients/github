<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async;

use ApiClients\Client\Github\Resource\RepositorySimple as BaseRepositorySimple;
use Exception;

class RepositorySimple extends BaseRepositorySimple
{
    public function refresh(): RepositorySimple
    {
        throw new Exception('TODO: create refresh method!');
    }
}
