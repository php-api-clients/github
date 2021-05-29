<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Refs;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\GetAllRefs;

final class CbNamespaceRcb
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): GetAllRefs
    {
        return new GetAllRefs($owner, $repo, $per_page, $page);
    }
}
