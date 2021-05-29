<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\GetOrgInstallation;

final class Installation
{
    function get(string $accept = 'application/vnd.github.machine-man-preview+json', $org): GetOrgInstallation
    {
        return new GetOrgInstallation($accept, $org);
    }
}
