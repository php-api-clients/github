<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\DismissReviewOperation;

final class Dismissals
{
    function put($owner, $repo, $pull_number, $review_id): DismissReviewOperation
    {
        return new DismissReviewOperation($owner, $repo, $pull_number, $review_id);
    }
}
