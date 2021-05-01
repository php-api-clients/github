<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\\Setup\Api;

final class Maintenance
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\GetMaintenanceStatusOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\GetMaintenanceStatusOperation();
    }
    function post() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\EnableOrDisableMaintenanceModeOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\EnableOrDisableMaintenanceModeOperation();
    }
}