<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb\Stats;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetCodeFrequencyStats;

final class CodeFrequency
{
    function get($owner, $repo): GetCodeFrequencyStats
    {
        return new GetCodeFrequencyStats($owner, $repo);
    }
}
