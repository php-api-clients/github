<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Repos\CbOwnerRcb\CbRepoRcb\Assignees;

final class CbAssigneeRcb
{
    function get($owner, $repo, $assignee) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Issues\CheckUserCanBeAssigned
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Issues\CheckUserCanBeAssigned($owner, $repo, $assignee);
    }
}
