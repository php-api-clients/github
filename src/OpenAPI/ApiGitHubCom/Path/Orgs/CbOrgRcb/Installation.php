<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetOrgInstallationOperation;

final class Installation
{
    function get($org): GetOrgInstallationOperation
    {
        return new GetOrgInstallationOperation($org);
    }
}
