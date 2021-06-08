<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\MatchingRefs;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\ListMatchingRefs;

final class CbRefRcb
{
    function get($owner, $repo, $ref, int $per_page = 30, int $page = 1): ListMatchingRefs
    {
        return new ListMatchingRefs($owner, $repo, $ref, $per_page, $page);
    }
}
