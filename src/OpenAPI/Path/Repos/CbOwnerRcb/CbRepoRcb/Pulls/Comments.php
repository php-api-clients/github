<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Pulls;

final class Comments
{
    function get($owner, $repo, $sort, $direction, $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Pulls\ListReviewCommentsForRepoOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Pulls\ListReviewCommentsForRepoOperation($owner, $repo, $sort, $direction, $since, $per_page, $page);
    }
}
