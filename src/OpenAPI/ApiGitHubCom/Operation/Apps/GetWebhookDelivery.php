<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps;

final class GetWebhookDelivery
{
    private const OPERATION_ID = 'apps/get-webhook-delivery';
    /****/
    public int $delivery_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($delivery_id)
    {
        $this->delivery_id = $delivery_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{delivery_id}'), array($this->delivery_id), '/app/hook/deliveries/{delivery_id}?'));
    }
    function validateResponse()
    {
    }
}
