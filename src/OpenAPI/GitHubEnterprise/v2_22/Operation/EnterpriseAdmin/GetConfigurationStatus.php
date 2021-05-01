<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin;

final class GetConfigurationStatus
{
    private const OPERATION_ID = 'enterprise-admin/get-configuration-status';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array(), array(), '/setup/api/configcheck?'));
    }
    function validateResponse()
    {
    }
}
