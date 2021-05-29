<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Users\ListOperation;

final class Users
{
    function get($since, int $per_page = 30): ListOperation
    {
        return new ListOperation($since, $per_page);
    }
}
