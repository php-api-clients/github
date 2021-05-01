<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\EnterpriseAdmin;

final class CreatePreReceiveEnvironment
{
    private const OPERATION_ID = 'enterprise-admin/create-pre-receive-environment';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array(), array(), '/admin/pre-receive-environments?'));
    }
    function validateResponse()
    {
    }
}
