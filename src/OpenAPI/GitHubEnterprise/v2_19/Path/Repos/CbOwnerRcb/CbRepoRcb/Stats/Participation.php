<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb\Stats;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetParticipationStats;

final class Participation
{
    function get($owner, $repo): GetParticipationStats
    {
        return new GetParticipationStats($owner, $repo);
    }
}
