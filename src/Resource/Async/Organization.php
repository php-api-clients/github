<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async;

use ApiClients\Client\Github\Resource\Organization as BaseOrganization;

class Organization extends BaseOrganization
{
    public function refresh() : Organization
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
