<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\EnterpriseAdmin;

final class CreateEnterpriseServerLicense
{
    private const OPERATION_ID = 'enterprise-admin/create-enterprise-server-license';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array(), array(), '/setup/api/start?'));
    }
    function validateResponse()
    {
    }
}
