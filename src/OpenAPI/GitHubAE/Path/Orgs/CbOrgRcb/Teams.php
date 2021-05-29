<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CreateOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListOperation;

final class Teams
{
    function get($org, int $per_page = 30, int $page = 1): ListOperation
    {
        return new ListOperation($org, $per_page, $page);
    }

    function post($org): CreateOperation
    {
        return new CreateOperation($org);
    }
}
