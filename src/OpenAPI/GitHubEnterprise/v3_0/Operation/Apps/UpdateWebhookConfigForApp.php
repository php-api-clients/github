<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps;

final class UpdateWebhookConfigForApp
{
    private const OPERATION_ID = 'apps/update-webhook-config-for-app';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('patch', \str_replace(array(), array(), '/app/hook/config?'));
    }
    function validateResponse()
    {
    }
}
