<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb;

final class Lock
{
    function put($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\Lock
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\Lock($owner, $repo, $issue_number);
    }
    function delete($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\Unlock
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\Unlock($owner, $repo, $issue_number);
    }
}
