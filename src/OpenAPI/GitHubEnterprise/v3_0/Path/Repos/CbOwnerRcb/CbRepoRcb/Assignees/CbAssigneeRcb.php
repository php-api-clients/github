<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Assignees;

final class CbAssigneeRcb
{
    function get($owner, $repo, $assignee) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Issues\CheckUserCanBeAssigned
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Issues\CheckUserCanBeAssigned($owner, $repo, $assignee);
    }
}
