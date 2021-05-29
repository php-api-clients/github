<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\ListPublicOperation;

final class Repositories
{
    function get($since, string $visibility = 'public'): ListPublicOperation
    {
        return new ListPublicOperation($since, $visibility);
    }
}
