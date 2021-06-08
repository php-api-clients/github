<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListBranchesForHeadCommit;

final class BranchesDashWhereDashHead
{
    function get($owner, $repo, $commit_sha): ListBranchesForHeadCommit
    {
        return new ListBranchesForHeadCommit($owner, $repo, $commit_sha);
    }
}
