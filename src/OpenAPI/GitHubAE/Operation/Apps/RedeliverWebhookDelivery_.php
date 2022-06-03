<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps;

final class RedeliverWebhookDelivery_
{
    private const OPERATION_ID = 'apps/redeliver-webhook-delivery';
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
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{delivery_id}'), array($this->delivery_id), '/app/hook/deliveries/{delivery_id}/attempts?'));
    }
    function validateResponse()
    {
    }
}
