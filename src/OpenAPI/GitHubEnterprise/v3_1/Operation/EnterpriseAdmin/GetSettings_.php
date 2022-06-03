<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin;

final class GetSettings_
{
    private const OPERATION_ID = 'enterprise-admin/get-settings';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array(), array(), '/setup/api/settings?'));
    }
    function validateResponse()
    {
    }
}
