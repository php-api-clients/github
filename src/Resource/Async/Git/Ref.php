<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Git;

use ApiClients\Client\Github\Resource\Git\Ref as BaseRef;

class Ref extends BaseRef
{
    public function refresh(): Ref
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
