<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps;

final class GetWebhookConfigForApp_
{
    private const OPERATION_ID = 'apps/get-webhook-config-for-app';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array(), array(), '/app/hook/config?'));
    }
    function validateResponse()
    {
    }
}
