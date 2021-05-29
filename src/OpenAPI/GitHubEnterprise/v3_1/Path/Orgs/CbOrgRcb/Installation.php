<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\GetOrgInstallationOperation;

final class Installation
{
    function get($org): GetOrgInstallationOperation
    {
        return new GetOrgInstallationOperation($org);
    }
}
