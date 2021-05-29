<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateCommitComment;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListCommentsForCommit;

final class Comments
{
    function get($owner, $repo, $commit_sha, int $per_page = 30, int $page = 1): ListCommentsForCommit
    {
        return new ListCommentsForCommit($owner, $repo, $commit_sha, $per_page, $page);
    }

    function post($owner, $repo, $commit_sha): CreateCommitComment
    {
        return new CreateCommitComment($owner, $repo, $commit_sha);
    }
}
