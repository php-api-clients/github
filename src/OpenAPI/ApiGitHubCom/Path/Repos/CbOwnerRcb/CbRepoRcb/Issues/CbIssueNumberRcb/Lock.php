<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb;

final class Lock
{
    function put($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\LockOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\LockOperation($owner, $repo, $issue_number);
    }
    function delete($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\UnlockOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\UnlockOperation($owner, $repo, $issue_number);
    }
}
