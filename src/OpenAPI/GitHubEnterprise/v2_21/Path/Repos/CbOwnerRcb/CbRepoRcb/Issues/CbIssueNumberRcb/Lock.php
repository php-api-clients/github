<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Issues\Unlock;

final class Lock
{
    function put($owner, $repo, $issue_number): \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Issues\Lock
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Issues\Lock($owner, $repo, $issue_number);
    }

    function delete($owner, $repo, $issue_number): Unlock
    {
        return new Unlock($owner, $repo, $issue_number);
    }
}
