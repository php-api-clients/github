<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Milestones;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Issues\DeleteMilestoneOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Issues\GetMilestoneOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Issues\UpdateMilestoneOperation;

final class CbMilestoneNumberRcb
{
    function get($owner, $repo, $milestone_number): GetMilestoneOperation
    {
        return new GetMilestoneOperation($owner, $repo, $milestone_number);
    }

    function delete($owner, $repo, $milestone_number): DeleteMilestoneOperation
    {
        return new DeleteMilestoneOperation($owner, $repo, $milestone_number);
    }

    function patch($owner, $repo, $milestone_number): UpdateMilestoneOperation
    {
        return new UpdateMilestoneOperation($owner, $repo, $milestone_number);
    }
}
