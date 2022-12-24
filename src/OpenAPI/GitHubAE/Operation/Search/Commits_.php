<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search;

final class Commits_
{
    private const OPERATION_ID = 'search/commits';
    public const OPERATION_MATCH = 'GET /search/commits';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    /**The query contains one or more search keywords and qualifiers. Qualifiers allow you to limit your search to specific areas of GitHub AE. The REST API supports the same qualifiers as the web interface for GitHub AE. To learn more about the format of the query, see [Constructing a search query](https://docs.github.com/github-ae@latest/rest/reference/search#constructing-a-search-query). See "[Searching commits](https://docs.github.com/github-ae@latest/search-github/searching-on-github/searching-commits)" for a detailed list of qualifiers.**/
    private readonly string $q;
    /**Sorts the results of your query by `author-date` or `committer-date`. Default: [best match](https://docs.github.com/github-ae@latest/rest/reference/search#ranking-search-results)**/
    private readonly string $sort;
    /**Determines whether the first search result returned is the highest number of matches (`desc`) or lowest number of matches (`asc`). This parameter is ignored unless you provide `sort`.**/
    private readonly string $order;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, string $q, string $sort, string $order = 'desc', int $per_page = 30, int $page = 1)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->q = $q;
        $this->sort = $sort;
        $this->order = $order;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{q}', '{sort}', '{order}', '{per_page}', '{page}'), array($this->q, $this->sort, $this->order, $this->per_page, $this->page), '/search/commits?q={q}&sort={sort}&order={order}&per_page={per_page}&page={page}'));
    }
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C22056F0250254Dfc8Db5706A60B6044E
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        $hydrator = new \WyriHaximus\Hydrator\Hydrator();
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C22056F0250254Dfc8Db5706A60B6044E::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $hydrator->hydrate('\\ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\Schema\\Unknown\\C22056F0250254Dfc8Db5706A60B6044E', $body);
                }
                break;
            /**Not modified**/
            case 304:
                switch ($contentType) {
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}