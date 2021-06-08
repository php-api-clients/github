<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\CreateReview;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListReviews;

final class Reviews
{
    function get($owner, $repo, $pull_number, int $per_page = 30, int $page = 1): ListReviews
    {
        return new ListReviews($owner, $repo, $pull_number, $per_page, $page);
    }

    function post($owner, $repo, $pull_number): CreateReview
    {
        return new CreateReview($owner, $repo, $pull_number);
    }
}
