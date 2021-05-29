<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Repos\CbOwnerRcb\CbRepoRcb\Stats;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos\GetParticipationStatsOperation;

final class Participation
{
    function get($owner, $repo): GetParticipationStatsOperation
    {
        return new GetParticipationStatsOperation($owner, $repo);
    }
}
