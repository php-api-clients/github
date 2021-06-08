<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Orgs\ListAppInstallations;

final class Installations
{
    function get(string $accept = 'application/vnd.github.machine-man-preview+json', $org, int $per_page = 30, int $page = 1): ListAppInstallations
    {
        return new ListAppInstallations($accept, $org, $per_page, $page);
    }
}
