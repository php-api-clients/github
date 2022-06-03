<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity;

final class ListReposStarredByUser_
{
    private const OPERATION_ID = 'activity/list-repos-starred-by-user';
    /**The handle for the GitHub user account.**/
    public string $username;
    /**The property to sort the results by. `created` means when the repository was starred. `updated` means when the repository was last pushed to.**/
    public string $sort;
    /**The direction to sort the results by.**/
    public string $direction;
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($username, string $sort = 'created', string $direction = 'desc', int $per_page = 30, int $page = 1)
    {
        $this->username = $username;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{username}', '{sort}', '{direction}', '{per_page}', '{page}'), array($this->username, $this->sort, $this->direction, $this->per_page, $this->page), '/users/{username}/starred?sort={sort}&direction={direction}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
