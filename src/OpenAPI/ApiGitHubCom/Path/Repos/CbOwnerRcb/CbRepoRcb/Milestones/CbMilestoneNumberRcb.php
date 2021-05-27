<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Milestones;

final class CbMilestoneNumberRcb
{
    function get($owner, $repo, $milestone_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetMilestoneOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetMilestoneOperation($owner, $repo, $milestone_number);
    }
    function delete($owner, $repo, $milestone_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\DeleteMilestoneOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\DeleteMilestoneOperation($owner, $repo, $milestone_number);
    }
    function patch($owner, $repo, $milestone_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\UpdateMilestoneOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\UpdateMilestoneOperation($owner, $repo, $milestone_number);
    }
}
