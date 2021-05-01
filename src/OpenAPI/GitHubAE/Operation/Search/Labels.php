<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search;

final class Labels
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
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($repository_id, $q, $sort, string $order = 'desc')
    {
        $this->repository_id = $repository_id;
        $this->q = $q;
        $this->sort = $sort;
        $this->order = $order;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{repository_id}', '{q}', '{sort}', '{order}'), array($this->repository_id, $this->q, $this->sort, $this->order), '/search/labels?repository_id={repository_id}&q={q}&sort={sort}&order={order}'));
    }
    function validateResponse()
    {
    }
}
