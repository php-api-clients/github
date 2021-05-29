<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Setup\Api;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\EnterpriseAdmin\EnableOrDisableMaintenanceModeOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\EnterpriseAdmin\GetMaintenanceStatusOperation;

final class Maintenance
{
    function get(): GetMaintenanceStatusOperation
    {
        return new GetMaintenanceStatusOperation();
    }

    function post(): EnableOrDisableMaintenanceModeOperation
    {
        return new EnableOrDisableMaintenanceModeOperation();
    }
}
