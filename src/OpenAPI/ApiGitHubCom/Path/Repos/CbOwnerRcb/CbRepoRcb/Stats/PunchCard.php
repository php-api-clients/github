<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Stats;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPunchCardStatsOperation;

final class PunchCard
{
    function get($owner, $repo): GetPunchCardStatsOperation
    {
        return new GetPunchCardStatsOperation($owner, $repo);
    }
}
