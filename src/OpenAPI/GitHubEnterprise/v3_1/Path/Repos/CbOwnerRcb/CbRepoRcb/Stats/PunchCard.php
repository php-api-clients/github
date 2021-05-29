<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Stats;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetPunchCardStatsOperation;

final class PunchCard
{
    function get($owner, $repo): GetPunchCardStatsOperation
    {
        return new GetPunchCardStatsOperation($owner, $repo);
    }
}
