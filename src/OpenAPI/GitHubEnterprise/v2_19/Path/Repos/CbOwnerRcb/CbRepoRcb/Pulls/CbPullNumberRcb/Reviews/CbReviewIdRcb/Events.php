<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Pulls\SubmitReview;

final class Events
{
    function post($owner, $repo, $pull_number, $review_id): SubmitReview
    {
        return new SubmitReview($owner, $repo, $pull_number, $review_id);
    }
}
