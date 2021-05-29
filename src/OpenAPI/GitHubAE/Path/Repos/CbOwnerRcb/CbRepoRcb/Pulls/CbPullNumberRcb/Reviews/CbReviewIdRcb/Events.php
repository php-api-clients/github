<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\SubmitReviewOperation;

final class Events
{
    function post($owner, $repo, $pull_number, $review_id): SubmitReviewOperation
    {
        return new SubmitReviewOperation($owner, $repo, $pull_number, $review_id);
    }
}
