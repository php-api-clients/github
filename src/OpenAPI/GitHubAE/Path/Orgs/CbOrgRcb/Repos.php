<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateInOrg;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListForOrg;

final class Repos
{
    function get($org, $type, string $sort = 'created', $direction, int $per_page = 30, int $page = 1): ListForOrg
    {
        return new ListForOrg($org, $type, $sort, $direction, $per_page, $page);
    }

    function post($org): CreateInOrg
    {
        return new CreateInOrg($org);
    }
}
