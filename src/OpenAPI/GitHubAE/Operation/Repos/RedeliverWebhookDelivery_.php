<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos;

final class RedeliverWebhookDelivery_
{
    private const OPERATION_ID = 'repos/redeliver-webhook-delivery';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The unique identifier of the hook.**/
    private readonly int $hook_id;
    private readonly int $delivery_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $hook_id, int $delivery_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->hook_id = $hook_id;
        $this->delivery_id = $delivery_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{owner}', '{repo}', '{hook_id}', '{delivery_id}'), array($this->owner, $this->repo, $this->hook_id, $this->delivery_id), '/repos/{owner}/{repo}/hooks/{hook_id}/deliveries/{delivery_id}/attempts'));
    }
    function validateResponse()
    {
    }
}
