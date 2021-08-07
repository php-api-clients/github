<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs;

final class GetWebhookDelivery
{
    private const OPERATION_ID = 'orgs/get-webhook-delivery';
    /****/
    public string $org;
    /****/
    public int $hook_id;
    /****/
    public int $delivery_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $hook_id, $delivery_id)
    {
        $this->org = $org;
        $this->hook_id = $hook_id;
        $this->delivery_id = $delivery_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{hook_id}', '{delivery_id}'), array($this->org, $this->hook_id, $this->delivery_id), '/orgs/{org}/hooks/{hook_id}/deliveries/{delivery_id}?'));
    }
    function validateResponse()
    {
    }
}
