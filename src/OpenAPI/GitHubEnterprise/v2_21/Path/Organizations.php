<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Orgs\ListOperation;

final class Organizations
{
    function get($since, int $per_page = 30): ListOperation
    {
        return new ListOperation($since, $per_page);
    }
}
