<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Activity;

final class ListEventsForAuthenticatedUser_
{
    private const OPERATION_ID = 'activity/list-events-for-authenticated-user';
    /****/
    public string $username;
    /**Results per page (max 100)**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($username, int $per_page = 30, int $page = 1)
    {
        $this->username = $username;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{username}', '{per_page}', '{page}'), array($this->username, $this->per_page, $this->page), '/users/{username}/events?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
