<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Contents;

use ApiClients\Client\Github\Resource\Contents\Links as BaseLinks;

class Links extends BaseLinks
{
    public function refresh(): Links
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
