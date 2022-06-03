<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin;

final class CreateGlobalWebhook_
{
    private const OPERATION_ID = 'enterprise-admin/create-global-webhook';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array(), array(), '/admin/hooks?'));
    }
    function validateResponse()
    {
    }
}
