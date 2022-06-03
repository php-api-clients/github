<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb;

final class Pulls
{
    function get($owner, $repo, $commit_sha, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\ListPullRequestsAssociatedWithCommit
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\ListPullRequestsAssociatedWithCommit($owner, $repo, $commit_sha, $per_page, $page);
    }
}
