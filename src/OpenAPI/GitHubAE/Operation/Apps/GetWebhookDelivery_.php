<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps;

final class GetWebhookDelivery_
{
    private const OPERATION_ID = 'apps/get-webhook-delivery';
    private readonly int $delivery_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $delivery_id)
    {
        $this->delivery_id = $delivery_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{delivery_id}'), array($this->delivery_id), '/app/hook/deliveries/{delivery_id}'));
    }
    function validateResponse()
    {
    }
}
