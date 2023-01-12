<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Assignees;

final class CbAssigneeRcb
{
    function get($owner, $repo, $issue_number, $assignee) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CheckUserCanBeAssignedToIssue
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CheckUserCanBeAssignedToIssue($owner, $repo, $issue_number, $assignee);
    }
}
