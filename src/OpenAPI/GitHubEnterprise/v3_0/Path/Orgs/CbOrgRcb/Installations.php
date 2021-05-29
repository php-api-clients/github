<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\ListAppInstallationsOperation;

final class Installations
{
    function get($org, int $per_page = 30, int $page = 1): ListAppInstallationsOperation
    {
        return new ListAppInstallationsOperation($org, $per_page, $page);
    }
}
