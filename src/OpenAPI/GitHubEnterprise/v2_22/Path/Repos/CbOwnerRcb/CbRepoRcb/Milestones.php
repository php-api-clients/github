<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\CreateMilestone;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListMilestones;

final class Milestones
{
    function get($owner, $repo, string $state = 'open', string $sort = 'due_on', string $direction = 'asc', int $per_page = 30, int $page = 1): ListMilestones
    {
        return new ListMilestones($owner, $repo, $state, $sort, $direction, $per_page, $page);
    }

    function post($owner, $repo): CreateMilestone
    {
        return new CreateMilestone($owner, $repo);
    }
}
