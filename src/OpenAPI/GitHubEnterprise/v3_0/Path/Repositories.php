<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\ListPublic;

final class Repositories
{
    function get($since, string $visibility = 'public'): ListPublic
    {
        return new ListPublic($since, $visibility);
    }
}
