<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Stats;

final class Contributors
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\GetContributorsStats
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\GetContributorsStats($owner, $repo);
    }
}
