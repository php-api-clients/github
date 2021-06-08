<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Pulls\DeletePendingReview;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Pulls\GetReview;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Pulls\UpdateReview;

final class CbReviewIdRcb
{
    function get($owner, $repo, $pull_number, $review_id): GetReview
    {
        return new GetReview($owner, $repo, $pull_number, $review_id);
    }

    function put($owner, $repo, $pull_number, $review_id): UpdateReview
    {
        return new UpdateReview($owner, $repo, $pull_number, $review_id);
    }

    function delete($owner, $repo, $pull_number, $review_id): DeletePendingReview
    {
        return new DeletePendingReview($owner, $repo, $pull_number, $review_id);
    }
}
