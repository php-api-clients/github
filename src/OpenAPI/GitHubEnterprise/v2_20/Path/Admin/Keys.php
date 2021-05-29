<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Admin;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\ListPublicKeysOperation;

final class Keys
{
    function get(int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created', $since): ListPublicKeysOperation
    {
        return new ListPublicKeysOperation($per_page, $page, $direction, $sort, $since);
    }
}
