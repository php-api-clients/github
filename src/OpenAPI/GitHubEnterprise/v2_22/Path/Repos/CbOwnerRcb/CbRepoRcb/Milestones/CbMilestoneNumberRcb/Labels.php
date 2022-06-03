<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Milestones\CbMilestoneNumberRcb;

final class Labels
{
    function get($owner, $repo, $milestone_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListLabelsForMilestone
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListLabelsForMilestone($owner, $repo, $milestone_number, $per_page, $page);
    }
}
