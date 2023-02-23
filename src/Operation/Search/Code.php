<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Search;

final class Code
{
    public const OPERATION_ID = 'search/code';
    public const OPERATION_MATCH = 'GET /search/code';
    private const METHOD = 'GET';
    private const PATH = '/search/code';
    /**The query contains one or more search keywords and qualifiers. Qualifiers allow you to limit your search to specific areas of GitHub. The REST API supports the same qualifiers as the web interface for GitHub. To learn more about the format of the query, see [Constructing a search query](https://docs.github.com/rest/reference/search#constructing-a-search-query). See "[Searching code](https://docs.github.com/search-github/searching-on-github/searching-code)" for a detailed list of qualifiers.**/
    private string $q;
    /**Sorts the results of your query. Can only be `indexed`, which indicates how recently a file has been indexed by the GitHub search infrastructure. Default: [best match](https://docs.github.com/rest/reference/search#ranking-search-results)**/
    private string $sort;
    /**Determines whether the first search result returned is the highest number of matches (`desc`) or lowest number of matches (`asc`). This parameter is ignored unless you provide `sort`.**/
    private string $order;
    /**The number of results per page (max 100).**/
    private int $per_page;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Search\Code $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Search\Code $hydrator, string $q, string $sort, string $order = 'desc', int $per_page = 30, int $page = 1)
    {
        $this->q = $q;
        $this->sort = $sort;
        $this->order = $order;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{q}', '{sort}', '{order}', '{per_page}', '{page}'), array($this->q, $this->sort, $this->order, $this->per_page, $this->page), self::PATH . '?q={q}&sort={sort}&order={order}&per_page={per_page}&page={page}'));
    }
    /**
     * @return \ApiClients\Client\Github\Schema\Operation\Search\Code\Response\Applicationjson\H200|\ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503|\ApiClients\Client\Github\Schema\ValidationError|\ApiClients\Client\Github\Schema\BasicError
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\Operation\Search\Code\Response\Applicationjson\H200|\ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503|\ApiClients\Client\Github\Schema\ValidationError|\ApiClients\Client\Github\Schema\BasicError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Forbidden**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\Operation\Search\Code\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\Operation\\Search\\Code\\Response\\Applicationjson\\H200', $body);
                }
                break;
            /**Forbidden**/
            case 503:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\Operation\\SecretScanning\\ListAlertsForEnterprise\\Response\\Applicationjson\\H503', $body);
                }
                break;
            /**Forbidden**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\ValidationError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\ValidationError', $body);
                }
                break;
            /**Forbidden**/
            case 403:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\BasicError', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
