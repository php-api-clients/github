<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects;

final class ListForUser_
{
    private const OPERATION_ID = 'projects/list-for-user';
    /**The handle for the GitHub user account.**/
    public string $username;
    /**Indicates the state of the projects to return. Can be either `open`, `closed`, or `all`.**/
    public string $state;
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($username, string $state = 'open', int $per_page = 30, int $page = 1)
    {
        $this->username = $username;
        $this->state = $state;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{username}', '{state}', '{per_page}', '{page}'), array($this->username, $this->state, $this->per_page, $this->page), '/users/{username}/projects?state={state}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
