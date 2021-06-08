<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListPullRequestsAssociatedWithCommit;

final class Pulls
{
    function get($owner, $repo, $commit_sha, int $per_page = 30, int $page = 1): ListPullRequestsAssociatedWithCommit
    {
        return new ListPullRequestsAssociatedWithCommit($owner, $repo, $commit_sha, $per_page, $page);
    }
}
