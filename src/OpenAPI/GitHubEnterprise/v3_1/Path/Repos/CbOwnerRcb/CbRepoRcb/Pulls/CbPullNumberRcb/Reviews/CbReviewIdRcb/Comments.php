<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListCommentsForReview;

final class Comments
{
    function get($owner, $repo, $pull_number, $review_id, int $per_page = 30, int $page = 1): ListCommentsForReview
    {
        return new ListCommentsForReview($owner, $repo, $pull_number, $review_id, $per_page, $page);
    }
}
