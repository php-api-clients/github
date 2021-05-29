<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\CreateCommitCommentOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\ListCommentsForCommitOperation;

final class Comments
{
    function get($owner, $repo, $commit_sha, int $per_page = 30, int $page = 1): ListCommentsForCommitOperation
    {
        return new ListCommentsForCommitOperation($owner, $repo, $commit_sha, $per_page, $page);
    }

    function post($owner, $repo, $commit_sha): CreateCommitCommentOperation
    {
        return new CreateCommitCommentOperation($owner, $repo, $commit_sha);
    }
}
