<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Stats;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetContributorsStats;

final class Contributors
{
    function get($owner, $repo): GetContributorsStats
    {
        return new GetContributorsStats($owner, $repo);
    }
}
