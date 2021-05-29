<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListReviewCommentsForRepo;

final class Comments
{
    function get($owner, $repo, $sort, $direction, $since, int $per_page = 30, int $page = 1): ListReviewCommentsForRepo
    {
        return new ListReviewCommentsForRepo($owner, $repo, $sort, $direction, $since, $per_page, $page);
    }
}