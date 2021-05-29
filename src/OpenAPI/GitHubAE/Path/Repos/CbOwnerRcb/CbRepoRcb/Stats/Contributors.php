<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Stats;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetContributorsStatsOperation;

final class Contributors
{
    function get($owner, $repo): GetContributorsStatsOperation
    {
        return new GetContributorsStatsOperation($owner, $repo);
    }
}
