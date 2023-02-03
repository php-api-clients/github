<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning;

final class ListAlertsForRepo
{
    private const OPERATION_ID = 'code-scanning/list-alerts-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/code-scanning/alerts';
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
    /**The Git reference for the results you want to list. The `ref` for a branch can be formatted either as `refs/heads/<branch name>` or simply `<branch name>`. To reference a pull request use `refs/pull/<number>/merge`.**/
    private string $ref;
    /**The direction to sort the results by.**/
    private string $direction;
    /**The property by which to sort the results.**/
    private string $sort;
    /**If specified, only code scanning alerts with this state will be returned.**/
    private string $state;
    /**If specified, only code scanning alerts with this severity will be returned.**/
    private string $severity;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator, string $owner, string $repo, string $tool_name, string|null $tool_guid, int $page = 1, int $per_page = 30, string $ref, string $direction = 'desc', string $sort = 'created', string $state, string $severity)
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
        $this->direction = $direction;
        $this->sort = $sort;
        $this->state = $state;
        $this->severity = $severity;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('GET', \str_replace(array('{owner}', '{repo}', '{tool_name}', '{tool_guid}', '{page}', '{per_page}', '{ref}', '{direction}', '{sort}', '{state}', '{severity}'), array($this->owner, $this->repo, $this->tool_name, $this->tool_guid, $this->page, $this->per_page, $this->ref, $this->direction, $this->sort, $this->state, $this->severity), '/repos/{owner}/{repo}/code-scanning/alerts?tool_name={tool_name}&tool_guid={tool_guid}&page={page}&per_page={per_page}&ref={ref}&direction={direction}&sort={sort}&state={state}&severity={severity}'));
    }
    /**
     * @return \Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAlertItems>|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\ListAlertsForRepo\Response\Application\Json\H503
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\ListAlertsForRepo\Response\Application\Json\H503
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAlertItems::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAlertItems {
                            return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\CodeScanningAlertItems', $body);
                        });
                }
                break;
            /**Not modified**/
            case 304:
                return 304;
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
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\ListAlertsForRepo\Response\Application\Json\H503::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\Operation\\ListAlertsForRepo\\Response\\Application\\Json\\H503', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
