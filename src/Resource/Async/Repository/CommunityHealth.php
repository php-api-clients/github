<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Repository;

use ApiClients\Client\Github\Resource\Repository\CommunityHealth as BaseCommunityHealth;

class CommunityHealth extends BaseCommunityHealth
{
    public function refresh(): CommunityHealth
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
