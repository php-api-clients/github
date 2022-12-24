<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Milestones;

final class CbMilestoneNumberRcb
{
    function get($owner, $repo, $milestone_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\GetMilestone
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\GetMilestone($owner, $repo, $milestone_number);
    }
    function delete($owner, $repo, $milestone_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\DeleteMilestone
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\DeleteMilestone($owner, $repo, $milestone_number);
    }
    function patch($owner, $repo, $milestone_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\UpdateMilestone
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\UpdateMilestone($owner, $repo, $milestone_number);
    }
}