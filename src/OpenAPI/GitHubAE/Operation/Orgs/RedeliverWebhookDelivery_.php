<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs;

final class RedeliverWebhookDelivery_
{
    private const OPERATION_ID = 'orgs/redeliver-webhook-delivery';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**The unique identifier of the hook.**/
    private readonly int $hook_id;
    private readonly int $delivery_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org, int $hook_id, int $delivery_id)
    {
        $this->org = $org;
        $this->hook_id = $hook_id;
        $this->delivery_id = $delivery_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{org}', '{hook_id}', '{delivery_id}'), array($this->org, $this->hook_id, $this->delivery_id), '/orgs/{org}/hooks/{hook_id}/deliveries/{delivery_id}/attempts'));
    }
    function validateResponse()
    {
    }
}
