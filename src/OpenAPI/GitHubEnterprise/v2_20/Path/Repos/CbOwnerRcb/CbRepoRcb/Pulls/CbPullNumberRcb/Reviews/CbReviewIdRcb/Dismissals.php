<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Pulls\DismissReview;

final class Dismissals
{
    function put($owner, $repo, $pull_number, $review_id): DismissReview
    {
        return new DismissReview($owner, $repo, $pull_number, $review_id);
    }
}
