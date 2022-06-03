<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Stats;

final class Contributors
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetContributorsStats
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetContributorsStats($owner, $repo);
    }
}
