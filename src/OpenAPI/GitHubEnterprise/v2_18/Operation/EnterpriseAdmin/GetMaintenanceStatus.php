<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\EnterpriseAdmin;

final class GetMaintenanceStatus
{
    private const OPERATION_ID = 'enterprise-admin/get-maintenance-status';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array(), array(), '/setup/api/maintenance?'));
    }
    function validateResponse()
    {
    }
}