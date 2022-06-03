<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Stats;

final class PunchCard
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetPunchCardStats
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetPunchCardStats($owner, $repo);
    }
}
