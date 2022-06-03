<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb;

final class Assignees
{
    function post($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\AddAssignees
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\AddAssignees($owner, $repo, $issue_number);
    }
    function delete($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\RemoveAssignees
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\RemoveAssignees($owner, $repo, $issue_number);
    }
}
