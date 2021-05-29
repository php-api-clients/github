<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Pulls\CreateReviewCommentOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Pulls\ListReviewCommentsOperation;

final class Comments
{
    function get($owner, $repo, $pull_number, string $sort = 'created', $direction, $since, int $per_page = 30, int $page = 1): ListReviewCommentsOperation
    {
        return new ListReviewCommentsOperation($owner, $repo, $pull_number, $sort, $direction, $since, $per_page, $page);
    }

    function post($owner, $repo, $pull_number): CreateReviewCommentOperation
    {
        return new CreateReviewCommentOperation($owner, $repo, $pull_number);
    }
}
