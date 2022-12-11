<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity;

final class ListReposStarredByAuthenticatedUser_
{
    private const OPERATION_ID = 'activity/list-repos-starred-by-authenticated-user';
    /**The property to sort the results by. `created` means when the repository was starred. `updated` means when the repository was last pushed to.**/
    private readonly string $sort;
    /**The direction to sort the results by.**/
    private readonly string $direction;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $sort = 'created', string $direction = 'desc', int $per_page = 30, int $page = 1)
    {
        $this->sort = $sort;
        $this->direction = $direction;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{sort}', '{direction}', '{per_page}', '{page}'), array($this->sort, $this->direction, $this->per_page, $this->page), '/user/starred?sort={sort}&direction={direction}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
