<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Issues\LockOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Issues\UnlockOperation;

final class Lock
{
    function put($owner, $repo, $issue_number): LockOperation
    {
        return new LockOperation($owner, $repo, $issue_number);
    }

    function delete($owner, $repo, $issue_number): UnlockOperation
    {
        return new UnlockOperation($owner, $repo, $issue_number);
    }
}
