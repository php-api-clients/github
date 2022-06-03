<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb;

final class BranchesDashWhereDashHead
{
    function get($owner, $repo, $commit_sha) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListBranchesForHeadCommit
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListBranchesForHeadCommit($owner, $repo, $commit_sha);
    }
}
