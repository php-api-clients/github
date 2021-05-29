<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\DeletePendingReviewOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\GetReviewOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\UpdateReviewOperation;

final class CbReviewIdRcb
{
    function get($owner, $repo, $pull_number, $review_id): GetReviewOperation
    {
        return new GetReviewOperation($owner, $repo, $pull_number, $review_id);
    }

    function put($owner, $repo, $pull_number, $review_id): UpdateReviewOperation
    {
        return new UpdateReviewOperation($owner, $repo, $pull_number, $review_id);
    }

    function delete($owner, $repo, $pull_number, $review_id): DeletePendingReviewOperation
    {
        return new DeletePendingReviewOperation($owner, $repo, $pull_number, $review_id);
    }
}
