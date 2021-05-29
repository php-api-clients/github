<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Commits;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Git\GetCommitOperation;

final class CbCommitShaRcb
{
    function get($owner, $repo, $commit_sha): GetCommitOperation
    {
        return new GetCommitOperation($owner, $repo, $commit_sha);
    }
}
