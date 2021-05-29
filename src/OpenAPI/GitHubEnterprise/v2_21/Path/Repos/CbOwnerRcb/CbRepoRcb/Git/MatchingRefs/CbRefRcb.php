<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\MatchingRefs;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Git\ListMatchingRefsOperation;

final class CbRefRcb
{
    function get($owner, $repo, $ref, int $per_page = 30, int $page = 1): ListMatchingRefsOperation
    {
        return new ListMatchingRefsOperation($owner, $repo, $ref, $per_page, $page);
    }
}
