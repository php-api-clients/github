<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos;

final class ListForUser_
{
    private const OPERATION_ID = 'repos/list-for-user';
    /**The handle for the GitHub user account.**/
    public string $username;
    /**Limit results to repositories of the specified type.**/
    public string $type;
    /**The property to sort the results by.**/
    public string $sort;
    /**The order to sort by. Default: `asc` when using `full_name`, otherwise `desc`.**/
    public string $direction;
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($username, string $type = 'owner', string $sort = 'full_name', $direction, int $per_page = 30, int $page = 1)
    {
        $this->username = $username;
        $this->type = $type;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{username}', '{type}', '{sort}', '{direction}', '{per_page}', '{page}'), array($this->username, $this->type, $this->sort, $this->direction, $this->per_page, $this->page), '/users/{username}/repos?type={type}&sort={sort}&direction={direction}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
