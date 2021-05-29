<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Commits;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Git\GetCommit;

final class CbCommitShaRcb
{
    function get($owner, $repo, $commit_sha): GetCommit
    {
        return new GetCommit($owner, $repo, $commit_sha);
    }
}
