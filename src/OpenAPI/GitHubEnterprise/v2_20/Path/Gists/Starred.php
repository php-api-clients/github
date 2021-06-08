<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Gists;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Gists\ListStarred;

final class Starred
{
    function get($since, int $per_page = 30, int $page = 1): ListStarred
    {
        return new ListStarred($since, $per_page, $page);
    }
}
