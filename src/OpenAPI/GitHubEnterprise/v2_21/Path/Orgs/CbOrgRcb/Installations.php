<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Orgs\ListAppInstallationsOperation;

final class Installations
{
    function get(string $accept = 'application/vnd.github.machine-man-preview+json', $org, int $per_page = 30, int $page = 1): ListAppInstallationsOperation
    {
        return new ListAppInstallationsOperation($accept, $org, $per_page, $page);
    }
}
