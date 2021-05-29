<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\ListPreReceiveHooksForOrgOperation;

final class PreReceiveHooks
{
    function get($org, int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created'): ListPreReceiveHooksForOrgOperation
    {
        return new ListPreReceiveHooksForOrgOperation($org, $per_page, $page, $direction, $sort);
    }
}
