<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Stats;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetCommitActivityStats;

final class CommitActivity
{
    function get($owner, $repo): GetCommitActivityStats
    {
        return new GetCommitActivityStats($owner, $repo);
    }
}
