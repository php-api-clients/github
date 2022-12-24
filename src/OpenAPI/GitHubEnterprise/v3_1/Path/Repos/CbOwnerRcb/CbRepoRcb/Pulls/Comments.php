<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls;

final class Comments
{
    function get($owner, $repo, $sort, $direction, $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListReviewCommentsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListReviewCommentsForRepo($owner, $repo, $sort, $direction, $since, $per_page, $page);
    }
}