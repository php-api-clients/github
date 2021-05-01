<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\EnterpriseAdmin;

final class EnableOrDisableMaintenanceMode
{
    private const OPERATION_ID = 'enterprise-admin/enable-or-disable-maintenance-mode';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array(), array(), '/setup/api/maintenance?'));
    }
    function validateResponse()
    {
    }
}
