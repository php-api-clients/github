<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls;

final class Comments
{
    function get($owner, $repo, $sort, $direction, $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Pulls\ListReviewCommentsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Pulls\ListReviewCommentsForRepo($owner, $repo, $sort, $direction, $since, $per_page, $page);
    }
}
