<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Gists;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Gists\ListStarredOperation;

final class Starred
{
    function get($since, int $per_page = 30, int $page = 1): ListStarredOperation
    {
        return new ListStarredOperation($since, $per_page, $page);
    }
}
