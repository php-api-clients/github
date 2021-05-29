<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Stats;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\GetCodeFrequencyStatsOperation;

final class CodeFrequency
{
    function get($owner, $repo): GetCodeFrequencyStatsOperation
    {
        return new GetCodeFrequencyStatsOperation($owner, $repo);
    }
}
