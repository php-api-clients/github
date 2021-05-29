<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\GetOrgInstallation;

final class Installation
{
    function get($org): GetOrgInstallation
    {
        return new GetOrgInstallation($org);
    }
}
