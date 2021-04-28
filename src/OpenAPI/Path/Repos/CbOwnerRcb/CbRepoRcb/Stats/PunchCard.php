<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Stats;

final class PunchCard
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetPunchCardStatsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetPunchCardStatsOperation($owner, $repo);
    }
}
