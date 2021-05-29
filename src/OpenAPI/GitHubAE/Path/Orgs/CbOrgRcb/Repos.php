<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateInOrgOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListForOrgOperation;

final class Repos
{
    function get($org, $type, string $sort = 'created', $direction, int $per_page = 30, int $page = 1): ListForOrgOperation
    {
        return new ListForOrgOperation($org, $type, $sort, $direction, $per_page, $page);
    }

    function post($org): CreateInOrgOperation
    {
        return new CreateInOrgOperation($org);
    }
}
