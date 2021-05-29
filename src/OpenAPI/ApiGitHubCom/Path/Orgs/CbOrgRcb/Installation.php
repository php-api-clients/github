<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetOrgInstallation;

final class Installation
{
    function get($org): GetOrgInstallation
    {
        return new GetOrgInstallation($org);
    }
}
