<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Stats;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetCodeFrequencyStatsOperation;

final class CodeFrequency
{
    function get($owner, $repo): GetCodeFrequencyStatsOperation
    {
        return new GetCodeFrequencyStatsOperation($owner, $repo);
    }
}
