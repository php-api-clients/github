<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetOrgInstallation;

final class Installation
{
    function get($org): GetOrgInstallation
    {
        return new GetOrgInstallation($org);
    }
}
