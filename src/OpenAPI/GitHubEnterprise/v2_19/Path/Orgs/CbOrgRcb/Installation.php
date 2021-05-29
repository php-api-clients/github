<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Apps\GetOrgInstallationOperation;

final class Installation
{
    function get(string $accept = 'application/vnd.github.machine-man-preview+json', $org): GetOrgInstallationOperation
    {
        return new GetOrgInstallationOperation($accept, $org);
    }
}
