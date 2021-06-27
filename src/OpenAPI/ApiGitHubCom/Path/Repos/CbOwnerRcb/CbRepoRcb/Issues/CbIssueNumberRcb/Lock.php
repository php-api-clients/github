<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb;

final class Lock
{
    function put($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Lock
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Lock($owner, $repo, $issue_number);
    }
    function delete($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Unlock
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Unlock($owner, $repo, $issue_number);
    }
}
