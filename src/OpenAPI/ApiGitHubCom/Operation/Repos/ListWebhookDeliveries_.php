<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

final class ListWebhookDeliveries_
{
    private const OPERATION_ID = 'repos/list-webhook-deliveries';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The unique identifier of the hook.**/
    private readonly int $hook_id;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Used for pagination: the starting delivery from which the page of deliveries is fetched. Refer to the `link` header for the next and previous page cursors.**/
    private readonly string $cursor;
    private readonly bool $redelivery;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $hook_id, int $per_page = 30, string $cursor, bool $redelivery)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->hook_id = $hook_id;
        $this->per_page = $per_page;
        $this->cursor = $cursor;
        $this->redelivery = $redelivery;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{hook_id}', '{per_page}', '{cursor}', '{redelivery}'), array($this->owner, $this->repo, $this->hook_id, $this->per_page, $this->cursor, $this->redelivery), '/repos/{owner}/{repo}/hooks/{hook_id}/deliveries?per_page={per_page}&cursor={cursor}&redelivery={redelivery}'));
    }
    function validateResponse()
    {
    }
}
