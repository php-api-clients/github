<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\EnterpriseAdmin;

final class CreatePreReceiveHook_
{
    private const OPERATION_ID = 'enterprise-admin/create-pre-receive-hook';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array(), array(), '/admin/pre-receive-hooks?'));
    }
    function validateResponse()
    {
    }
}
