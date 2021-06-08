<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Admin;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\CreatePreReceiveHook;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\ListPreReceiveHooks;

final class PreReceiveHooks
{
    function get(int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created'): ListPreReceiveHooks
    {
        return new ListPreReceiveHooks($per_page, $page, $direction, $sort);
    }

    function post(): CreatePreReceiveHook
    {
        return new CreatePreReceiveHook();
    }
}
