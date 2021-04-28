<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Users;

final class ListFollowersForUser
{
    private const OPERATION_ID = 'users/list-followers-for-user';
    /****/
    public string $username;
    /**Results per page (max 100).**/
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{username}', '{per_page}', '{page}'), array($this->username, $this->per_page, $this->page), '/users/{username}/followers?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
