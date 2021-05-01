<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search;

final class Commits
{
    private const OPERATION_ID = 'search/commits';
    /**The query contains one or more search keywords and qualifiers. Qualifiers allow you to limit your search to specific areas of GitHub. The REST API supports the same qualifiers as GitHub.com. To learn more about the format of the query, see [Constructing a search query](https://docs.github.com/github-ae@latest/rest/reference/search#constructing-a-search-query). See "[Searching commits](https://help.github.com/articles/searching-commits/)" for a detailed list of qualifiers.**/
    public string $q;
    /**Sorts the results of your query by `author-date` or `committer-date`. Default: [best match](https://docs.github.com/github-ae@latest/rest/reference/search#ranking-search-results)**/
    public string $sort;
    /**Determines whether the first search result returned is the highest number of matches (`desc`) or lowest number of matches (`asc`). This parameter is ignored unless you provide `sort`.**/
    public string $order;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($q, $sort, string $order = 'desc', int $per_page = 30, int $page = 1)
    {
        $this->q = $q;
        $this->sort = $sort;
        $this->order = $order;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{q}', '{sort}', '{order}', '{per_page}', '{page}'), array($this->q, $this->sort, $this->order, $this->per_page, $this->page), '/search/commits?q={q}&sort={sort}&order={order}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}