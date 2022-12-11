<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps;

final class ListSubscriptionsForAuthenticatedUserStubbed_
{
    private const OPERATION_ID = 'apps/list-subscriptions-for-authenticated-user-stubbed';
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $per_page = 30, int $page = 1)
    {
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{per_page}', '{page}'), array($this->per_page, $this->page), '/user/marketplace_purchases/stubbed?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
