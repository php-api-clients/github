<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\ListTagsOperation;

final class Tags
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListTagsOperation
    {
        return new ListTagsOperation($owner, $repo, $per_page, $page);
    }
}
