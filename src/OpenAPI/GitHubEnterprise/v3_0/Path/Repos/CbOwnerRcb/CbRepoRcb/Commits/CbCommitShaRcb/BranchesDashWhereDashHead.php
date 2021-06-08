<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\ListBranchesForHeadCommit;

final class BranchesDashWhereDashHead
{
    function get($owner, $repo, $commit_sha): ListBranchesForHeadCommit
    {
        return new ListBranchesForHeadCommit($owner, $repo, $commit_sha);
    }
}
