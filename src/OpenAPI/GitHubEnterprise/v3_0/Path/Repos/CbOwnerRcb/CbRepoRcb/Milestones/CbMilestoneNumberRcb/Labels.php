<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Milestones\CbMilestoneNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Issues\ListLabelsForMilestone;

final class Labels
{
    function get($owner, $repo, $milestone_number, int $per_page = 30, int $page = 1): ListLabelsForMilestone
    {
        return new ListLabelsForMilestone($owner, $repo, $milestone_number, $per_page, $page);
    }
}
