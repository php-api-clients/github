<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs;

final class ListWebhookDeliveries_
{
    private const OPERATION_ID = 'orgs/list-webhook-deliveries';
    /**The organization name. The name is not case sensitive.**/
    public string $org;
    /**The unique identifier of the hook.**/
    public int $hook_id;
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**Used for pagination: the starting delivery from which the page of deliveries is fetched. Refer to the `link` header for the next and previous page cursors.**/
    public string $cursor;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $hook_id, int $per_page = 30, $cursor)
    {
        $this->org = $org;
        $this->hook_id = $hook_id;
        $this->per_page = $per_page;
        $this->cursor = $cursor;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{hook_id}', '{per_page}', '{cursor}'), array($this->org, $this->hook_id, $this->per_page, $this->cursor), '/orgs/{org}/hooks/{hook_id}/deliveries?per_page={per_page}&cursor={cursor}'));
    }
    function validateResponse()
    {
    }
}
