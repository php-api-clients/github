<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs;

final class ListMembershipsForAuthenticatedUser
{
    private const OPERATION_ID = 'orgs/list-memberships-for-authenticated-user';
    /**Indicates the state of the memberships to return. Can be either `active` or `pending`. If not specified, the API returns both active and pending memberships.**/
    public string $state;
    /**Results per page (max 100)**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($state, int $per_page = 30, int $page = 1)
    {
        $this->state = $state;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{state}', '{per_page}', '{page}'), array($this->state, $this->per_page, $this->page), '/user/memberships/orgs?state={state}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
