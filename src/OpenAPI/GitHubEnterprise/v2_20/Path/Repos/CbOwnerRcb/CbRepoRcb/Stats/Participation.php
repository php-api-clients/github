<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\\Repos\CbOwnerRcb\CbRepoRcb\Stats;

final class Participation
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos\GetParticipationStatsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos\GetParticipationStatsOperation($owner, $repo);
    }
}