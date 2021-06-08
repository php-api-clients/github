<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListForOrg;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartForOrg;

final class Migrations
{
    function get($org, int $per_page = 30, int $page = 1, $exclude): ListForOrg
    {
        return new ListForOrg($org, $per_page, $page, $exclude);
    }

    function post($org): StartForOrg
    {
        return new StartForOrg($org);
    }
}
