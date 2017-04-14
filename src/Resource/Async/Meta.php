<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async;

use ApiClients\Client\Github\Resource\Meta as BaseMeta;

class Meta extends BaseMeta
{
    public function refresh() : Meta
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
