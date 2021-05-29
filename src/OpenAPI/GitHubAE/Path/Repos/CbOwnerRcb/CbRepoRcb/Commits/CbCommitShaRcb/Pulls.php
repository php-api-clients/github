<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListPullRequestsAssociatedWithCommitOperation;

final class Pulls
{
    function get($owner, $repo, $commit_sha, int $per_page = 30, int $page = 1): ListPullRequestsAssociatedWithCommitOperation
    {
        return new ListPullRequestsAssociatedWithCommitOperation($owner, $repo, $commit_sha, $per_page, $page);
    }
}
