<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Users\ListOperation;

final class Users
{
    function get($since, int $per_page = 30): ListOperation
    {
        return new ListOperation($since, $per_page);
    }
}
