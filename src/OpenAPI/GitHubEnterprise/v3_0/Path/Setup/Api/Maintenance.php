<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Setup\Api;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\EnableOrDisableMaintenanceMode;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\GetMaintenanceStatus;

final class Maintenance
{
    function get(): GetMaintenanceStatus
    {
        return new GetMaintenanceStatus();
    }

    function post(): EnableOrDisableMaintenanceMode
    {
        return new EnableOrDisableMaintenanceMode();
    }
}
