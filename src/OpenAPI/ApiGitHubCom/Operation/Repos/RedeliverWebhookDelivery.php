<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

final class RedeliverWebhookDelivery
{
    private const OPERATION_ID = 'repos/redeliver-webhook-delivery';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /****/
    public int $hook_id;
    /****/
    public int $delivery_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $hook_id, $delivery_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->hook_id = $hook_id;
        $this->delivery_id = $delivery_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{owner}', '{repo}', '{hook_id}', '{delivery_id}'), array($this->owner, $this->repo, $this->hook_id, $this->delivery_id), '/repos/{owner}/{repo}/hooks/{hook_id}/deliveries/{delivery_id}/attempts?'));
    }
    function validateResponse()
    {
    }
}
