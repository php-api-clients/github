<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\EnterpriseAdmin;

final class SetSettings
{
    private const OPERATION_ID = 'enterprise-admin/set-settings';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array(), array(), '/setup/api/settings?'));
    }
    function validateResponse()
    {
    }
}
