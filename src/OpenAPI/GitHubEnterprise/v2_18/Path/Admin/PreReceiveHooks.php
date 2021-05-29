<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Admin;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\EnterpriseAdmin\CreatePreReceiveHookOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\EnterpriseAdmin\ListPreReceiveHooksOperation;

final class PreReceiveHooks
{
    function get(int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created'): ListPreReceiveHooksOperation
    {
        return new ListPreReceiveHooksOperation($per_page, $page, $direction, $sort);
    }

    function post(): CreatePreReceiveHookOperation
    {
        return new CreatePreReceiveHookOperation();
    }
}
