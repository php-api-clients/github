<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Stats;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\GetParticipationStats;

final class Participation
{
    function get($owner, $repo): GetParticipationStats
    {
        return new GetParticipationStats($owner, $repo);
    }
}
