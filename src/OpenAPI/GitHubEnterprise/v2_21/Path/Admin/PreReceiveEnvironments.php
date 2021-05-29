<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Admin;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\CreatePreReceiveEnvironmentOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\ListPreReceiveEnvironmentsOperation;

final class PreReceiveEnvironments
{
    function get(int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created'): ListPreReceiveEnvironmentsOperation
    {
        return new ListPreReceiveEnvironmentsOperation($per_page, $page, $direction, $sort);
    }

    function post(): CreatePreReceiveEnvironmentOperation
    {
        return new CreatePreReceiveEnvironmentOperation();
    }
}
