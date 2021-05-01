<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\\Repos\CbOwnerRcb\CbRepoRcb\Stats;

final class Contributors
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\GetContributorsStatsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\GetContributorsStatsOperation($owner, $repo);
    }
}