<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Stats;

final class CodeFrequency
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\GetCodeFrequencyStatsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\GetCodeFrequencyStatsOperation($owner, $repo);
    }
}
