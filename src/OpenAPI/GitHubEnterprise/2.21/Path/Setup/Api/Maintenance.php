<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Path\\Setup\Api;

final class Maintenance
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\EnterpriseAdmin\GetMaintenanceStatusOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\EnterpriseAdmin\GetMaintenanceStatusOperation();
    }
    function post() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\EnterpriseAdmin\EnableOrDisableMaintenanceModeOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\EnterpriseAdmin\EnableOrDisableMaintenanceModeOperation();
    }
}
