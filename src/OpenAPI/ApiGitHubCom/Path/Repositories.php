<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListPublicOperation;

final class Repositories
{
    function get($since): ListPublicOperation
    {
        return new ListPublicOperation($since);
    }
}
