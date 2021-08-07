<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps;

final class ListWebhookDeliveries
{
    private const OPERATION_ID = 'apps/list-webhook-deliveries';
    /**Results per page (max 100)**/
    public int $per_page;
    /**Used for pagination: the starting delivery from which the page of deliveries is fetched. Refer to the `link` header for the next and previous page cursors.**/
    public string $cursor;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $per_page = 30, $cursor)
    {
        $this->per_page = $per_page;
        $this->cursor = $cursor;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{per_page}', '{cursor}'), array($this->per_page, $this->cursor), '/app/hook/deliveries?per_page={per_page}&cursor={cursor}'));
    }
    function validateResponse()
    {
    }
}
