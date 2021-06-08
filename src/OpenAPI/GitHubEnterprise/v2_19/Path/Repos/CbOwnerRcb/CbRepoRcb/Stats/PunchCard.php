<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb\Stats;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetPunchCardStats;

final class PunchCard
{
    function get($owner, $repo): GetPunchCardStats
    {
        return new GetPunchCardStats($owner, $repo);
    }
}
