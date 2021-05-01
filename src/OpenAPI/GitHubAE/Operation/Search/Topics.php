<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search;

final class Topics
{
    private const OPERATION_ID = 'search/topics';
    /**The query contains one or more search keywords and qualifiers. Qualifiers allow you to limit your search to specific areas of GitHub. The REST API supports the same qualifiers as GitHub.com. To learn more about the format of the query, see [Constructing a search query](https://docs.github.com/github-ae@latest/rest/reference/search#constructing-a-search-query).**/
    public string $q;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($q)
    {
        $this->q = $q;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{q}'), array($this->q), '/search/topics?q={q}'));
    }
    function validateResponse()
    {
    }
}
