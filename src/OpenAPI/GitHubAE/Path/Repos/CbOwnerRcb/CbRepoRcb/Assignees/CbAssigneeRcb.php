<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Assignees;

final class CbAssigneeRcb
{
    function get($owner, $repo, $assignee) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\CheckUserCanBeAssigned
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\CheckUserCanBeAssigned($owner, $repo, $assignee);
    }
}
