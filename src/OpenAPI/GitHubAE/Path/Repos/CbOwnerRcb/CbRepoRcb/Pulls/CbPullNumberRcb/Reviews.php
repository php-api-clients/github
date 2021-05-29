<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\CreateReviewOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\ListReviewsOperation;

final class Reviews
{
    function get($owner, $repo, $pull_number, int $per_page = 30, int $page = 1): ListReviewsOperation
    {
        return new ListReviewsOperation($owner, $repo, $pull_number, $per_page, $page);
    }

    function post($owner, $repo, $pull_number): CreateReviewOperation
    {
        return new CreateReviewOperation($owner, $repo, $pull_number);
    }
}
