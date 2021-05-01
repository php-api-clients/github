<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Path\\Repos\CbOwnerRcb\CbRepoRcb\Milestones\CbMilestoneNumberRcb;

final class Labels
{
    function get($owner, $repo, $milestone_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Issues\ListLabelsForMilestoneOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Issues\ListLabelsForMilestoneOperation($owner, $repo, $milestone_number, $per_page, $page);
    }
}
