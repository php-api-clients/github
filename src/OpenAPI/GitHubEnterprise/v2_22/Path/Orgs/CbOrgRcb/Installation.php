<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\GetOrgInstallationOperation;

final class Installation
{
    function get($org): GetOrgInstallationOperation
    {
        return new GetOrgInstallationOperation($org);
    }
}
