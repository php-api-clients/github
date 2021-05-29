<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\ListReviewCommentsForRepoOperation;

final class Comments
{
    function get($owner, $repo, $sort, $direction, $since, int $per_page = 30, int $page = 1): ListReviewCommentsForRepoOperation
    {
        return new ListReviewCommentsForRepoOperation($owner, $repo, $sort, $direction, $since, $per_page, $page);
    }
}
