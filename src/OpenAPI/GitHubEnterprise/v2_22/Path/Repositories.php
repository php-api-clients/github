<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\ListPublicOperation;

final class Repositories
{
    function get($since, string $visibility = 'public'): ListPublicOperation
    {
        return new ListPublicOperation($since, $visibility);
    }
}
