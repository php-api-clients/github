<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search;

final class Labels_
{
    private const OPERATION_ID = 'search/labels';
    /**The id of the repository.**/
    public int $repository_id;
    /**The search keywords. This endpoint does not accept qualifiers in the query. To learn more about the format of the query, see [Constructing a search query](https://docs.github.com/github-ae@latest/rest/reference/search#constructing-a-search-query).**/
    public string $q;
    /**Sorts the results of your query by when the label was `created` or `updated`. Default: [best match](https://docs.github.com/github-ae@latest/rest/reference/search#ranking-search-results)**/
    public string $sort;
    /**Determines whether the first search result returned is the highest number of matches (`desc`) or lowest number of matches (`asc`). This parameter is ignored unless you provide `sort`.**/
    public string $order;
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($repository_id, $q, $sort, string $order = 'desc', int $per_page = 30, int $page = 1)
    {
        $this->repository_id = $repository_id;
        $this->q = $q;
        $this->sort = $sort;
        $this->order = $order;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{repository_id}', '{q}', '{sort}', '{order}', '{per_page}', '{page}'), array($this->repository_id, $this->q, $this->sort, $this->order, $this->per_page, $this->page), '/search/labels?repository_id={repository_id}&q={q}&sort={sort}&order={order}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
