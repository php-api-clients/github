<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Milestones;

final class CbMilestoneNumberRcb
{
    function get($owner, $repo, $milestone_number) : \ApiClients\Client\Github\OpenAPI\Operation\Issues\GetMilestoneOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Issues\GetMilestoneOperation($owner, $repo, $milestone_number);
    }
    function delete($owner, $repo, $milestone_number) : \ApiClients\Client\Github\OpenAPI\Operation\Issues\DeleteMilestoneOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Issues\DeleteMilestoneOperation($owner, $repo, $milestone_number);
    }
    function patch($owner, $repo, $milestone_number) : \ApiClients\Client\Github\OpenAPI\Operation\Issues\UpdateMilestoneOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Issues\UpdateMilestoneOperation($owner, $repo, $milestone_number);
    }
}
