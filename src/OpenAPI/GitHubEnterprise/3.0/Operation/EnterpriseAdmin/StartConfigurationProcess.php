<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\EnterpriseAdmin;

final class StartConfigurationProcess
{
    private const OPERATION_ID = 'enterprise-admin/start-configuration-process';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array(), array(), '/setup/api/configure?'));
    }
    function validateResponse()
    {
    }
}
