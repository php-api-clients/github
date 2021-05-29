<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Stats;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\GetContributorsStatsOperation;

final class Contributors
{
    function get($owner, $repo): GetContributorsStatsOperation
    {
        return new GetContributorsStatsOperation($owner, $repo);
    }
}
