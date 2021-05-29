<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Git;

use ApiClients\Client\Github\Resource\Git\NamedBlob as BaseNamedBlob;
use Exception;

class NamedBlob extends BaseNamedBlob
{
    public function refresh(): NamedBlob
    {
        throw new Exception('TODO: create refresh method!');
    }
}
