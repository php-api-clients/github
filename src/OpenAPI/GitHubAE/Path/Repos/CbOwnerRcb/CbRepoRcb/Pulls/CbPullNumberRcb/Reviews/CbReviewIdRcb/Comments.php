<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\ListCommentsForReviewOperation;

final class Comments
{
    function get($owner, $repo, $pull_number, $review_id, int $per_page = 30, int $page = 1): ListCommentsForReviewOperation
    {
        return new ListCommentsForReviewOperation($owner, $repo, $pull_number, $review_id, $per_page, $page);
    }
}
