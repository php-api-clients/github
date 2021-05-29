<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListBranchesForHeadCommitOperation;

final class BranchesDashWhereDashHead
{
    function get($owner, $repo, $commit_sha): ListBranchesForHeadCommitOperation
    {
        return new ListBranchesForHeadCommitOperation($owner, $repo, $commit_sha);
    }
}
