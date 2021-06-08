<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Milestones;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Issues\DeleteMilestone;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Issues\GetMilestone;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Issues\UpdateMilestone;

final class CbMilestoneNumberRcb
{
    function get($owner, $repo, $milestone_number): GetMilestone
    {
        return new GetMilestone($owner, $repo, $milestone_number);
    }

    function delete($owner, $repo, $milestone_number): DeleteMilestone
    {
        return new DeleteMilestone($owner, $repo, $milestone_number);
    }

    function patch($owner, $repo, $milestone_number): UpdateMilestone
    {
        return new UpdateMilestone($owner, $repo, $milestone_number);
    }
}
