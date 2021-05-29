<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Stats;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetCommitActivityStatsOperation;

final class CommitActivity
{
    function get($owner, $repo): GetCommitActivityStatsOperation
    {
        return new GetCommitActivityStatsOperation($owner, $repo);
    }
}
