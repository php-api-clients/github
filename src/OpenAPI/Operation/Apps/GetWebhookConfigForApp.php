<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Apps;

final class GetWebhookConfigForApp
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
