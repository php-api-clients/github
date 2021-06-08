<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\GetOrgInstallation;

final class Installation
{
    function get($org): GetOrgInstallation
    {
        return new GetOrgInstallation($org);
    }
}
