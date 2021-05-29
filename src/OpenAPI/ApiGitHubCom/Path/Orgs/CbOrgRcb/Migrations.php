<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListForOrgOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartForOrgOperation;

final class Migrations
{
    function get($org, int $per_page = 30, int $page = 1, $exclude): ListForOrgOperation
    {
        return new ListForOrgOperation($org, $per_page, $page, $exclude);
    }

    function post($org): StartForOrgOperation
    {
        return new StartForOrgOperation($org);
    }
}
