<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning;

final class ListRecentAnalyses
{
    private const OPERATION_ID = 'code-scanning/list-recent-analyses';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/code-scanning/analyses';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator;
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The name of a code scanning tool. Only results by this tool will be listed. You can specify the tool by using either `tool_name` or `tool_guid`, but not both.**/
    private string $tool_name;
    /**The GUID of a code scanning tool. Only results by this tool will be listed. Note that some code scanning tools may not include a GUID in their analysis data. You can specify the tool by using either `tool_guid` or `tool_name`, but not both.**/
    private string|null $tool_guid;
    /**Page number of the results to fetch.**/
    private int $page;
    /**The number of results per page (max 100).**/
    private int $per_page;
    /**The Git reference for the analyses you want to list. The `ref` for a branch can be formatted either as `refs/heads/<branch name>` or simply `<branch name>`. To reference a pull request use `refs/pull/<number>/merge`.**/
    private string $ref;
    /**Filter analyses belonging to the same SARIF upload.**/
    private string $sarif_id;
    /**The direction to sort the results by.**/
    private string $direction;
    /**The property by which to sort the results.**/
    private string $sort;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator, string $owner, string $repo, string $tool_name, string|null $tool_guid, int $page = 1, int $per_page = 30, string $ref, string $sarif_id, string $direction = 'desc', string $sort = 'created')
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
        $this->owner = $owner;
        $this->repo = $repo;
        $this->tool_name = $tool_name;
        $this->tool_guid = $tool_guid;
        $this->page = $page;
        $this->per_page = $per_page;
        $this->ref = $ref;
        $this->sarif_id = $sarif_id;
        $this->direction = $direction;
        $this->sort = $sort;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('GET', \str_replace(array('{owner}', '{repo}', '{tool_name}', '{tool_guid}', '{page}', '{per_page}', '{ref}', '{sarif_id}', '{direction}', '{sort}'), array($this->owner, $this->repo, $this->tool_name, $this->tool_guid, $this->page, $this->per_page, $this->ref, $this->sarif_id, $this->direction, $this->sort), '/repos/{owner}/{repo}/code-scanning/analyses?tool_name={tool_name}&tool_guid={tool_guid}&page={page}&per_page={per_page}&ref={ref}&sarif_id={sarif_id}&direction={direction}&sort={sort}'));
    }
    /**
     * @return \Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAnalysis>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\ListRecentAnalyses\Response\Application\Json\H503
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\ListRecentAnalyses\Response\Application\Json\H503
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAnalysis::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAnalysis {
                            return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\CodeScanningAnalysis', $body);
                        });
                }
                break;
            /**Response if GitHub Advanced Security is not enabled for this repository**/
            case 403:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\BasicError', $body);
                }
                break;
            /**Resource not found**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\BasicError', $body);
                }
                break;
            /**Service unavailable**/
            case 503:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\ListRecentAnalyses\Response\Application\Json\H503::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\Operation\\ListRecentAnalyses\\Response\\Application\\Json\\H503', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
