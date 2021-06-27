<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Assignees;

final class CbAssigneeRcb
{
    function get($owner, $repo, $assignee) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CheckUserCanBeAssigned
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CheckUserCanBeAssigned($owner, $repo, $assignee);
    }
}
