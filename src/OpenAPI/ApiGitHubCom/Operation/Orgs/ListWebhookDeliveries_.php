<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs;

final class ListWebhookDeliveries_
{
    private const OPERATION_ID = 'orgs/list-webhook-deliveries';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
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
    function __construct(string $org, int $hook_id, int $per_page = 30, string $cursor, bool $redelivery)
    {
        $this->org = $org;
        $this->hook_id = $hook_id;
        $this->per_page = $per_page;
        $this->cursor = $cursor;
        $this->redelivery = $redelivery;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{hook_id}', '{per_page}', '{cursor}', '{redelivery}'), array($this->org, $this->hook_id, $this->per_page, $this->cursor, $this->redelivery), '/orgs/{org}/hooks/{hook_id}/deliveries?per_page={per_page}&cursor={cursor}&redelivery={redelivery}'));
    }
    function validateResponse()
    {
    }
}
