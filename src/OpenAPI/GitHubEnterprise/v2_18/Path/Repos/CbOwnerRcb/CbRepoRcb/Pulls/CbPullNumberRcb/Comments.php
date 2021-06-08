<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Pulls\CreateReviewCommentAlternative;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Pulls\ListReviewComments;

final class Comments
{
    function get($owner, $repo, $pull_number, string $sort = 'created', $direction, $since, int $per_page = 30, int $page = 1): ListReviewComments
    {
        return new ListReviewComments($owner, $repo, $pull_number, $sort, $direction, $since, $per_page, $page);
    }

    function post($owner, $repo, $pull_number): CreateReviewCommentAlternative
    {
        return new CreateReviewCommentAlternative($owner, $repo, $pull_number);
    }
}
