<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Issues\CreateMilestoneOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Issues\ListMilestonesOperation;

final class Milestones
{
    function get($owner, $repo, string $state = 'open', string $sort = 'due_on', string $direction = 'asc', int $per_page = 30, int $page = 1): ListMilestonesOperation
    {
        return new ListMilestonesOperation($owner, $repo, $state, $sort, $direction, $per_page, $page);
    }

    function post($owner, $repo): CreateMilestoneOperation
    {
        return new CreateMilestoneOperation($owner, $repo);
    }
}
