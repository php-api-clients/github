<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Admin;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreatePreReceiveEnvironment;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListPreReceiveEnvironments;

final class PreReceiveEnvironments
{
    function get(int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created'): ListPreReceiveEnvironments
    {
        return new ListPreReceiveEnvironments($per_page, $page, $direction, $sort);
    }

    function post(): CreatePreReceiveEnvironment
    {
        return new CreatePreReceiveEnvironment();
    }
}