<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Path\\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb;

final class Pulls
{
    function get($owner, $repo, $commit_sha, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\Repos\ListPullRequestsAssociatedWithCommitOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\Repos\ListPullRequestsAssociatedWithCommitOperation($owner, $repo, $commit_sha, $per_page, $page);
    }
}
