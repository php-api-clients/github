<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search;

final class Topics
{
    private const OPERATION_ID = 'search/topics';
    /**The query contains one or more search keywords and qualifiers. Qualifiers allow you to limit your search to specific areas of GitHub. The REST API supports the same qualifiers as GitHub.com. To learn more about the format of the query, see [Constructing a search query](https://docs.github.com/rest/reference/search#constructing-a-search-query).**/
    public string $q;
    /**Results per page (max 100)**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($q, int $per_page = 30, int $page = 1)
    {
        $this->q = $q;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{q}', '{per_page}', '{page}'), array($this->q, $this->per_page, $this->page), '/search/topics?q={q}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
