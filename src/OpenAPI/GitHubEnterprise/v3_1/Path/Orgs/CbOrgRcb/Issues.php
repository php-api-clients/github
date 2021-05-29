<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListForOrg;

final class Issues
{
    function get($org, string $filter = 'assigned', string $state = 'open', $labels, string $sort = 'created', string $direction = 'desc', $since, int $per_page = 30, int $page = 1): ListForOrg
    {
        return new ListForOrg($org, $filter, $state, $labels, $sort, $direction, $since, $per_page, $page);
    }
}