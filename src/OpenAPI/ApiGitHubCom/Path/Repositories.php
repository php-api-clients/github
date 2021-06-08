<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListPublic;

final class Repositories
{
    function get($since): ListPublic
    {
        return new ListPublic($since);
    }
}
