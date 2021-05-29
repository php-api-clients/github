<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Gists\CreateOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Gists\ListOperation;

final class Gists
{
    function get($since, int $per_page = 30, int $page = 1): ListOperation
    {
        return new ListOperation($since, $per_page, $page);
    }

    function post(): CreateOperation
    {
        return new CreateOperation();
    }
}
