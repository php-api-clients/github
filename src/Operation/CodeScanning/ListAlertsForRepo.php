<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\CodeScanning;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class ListAlertsForRepo
{
    public const OPERATION_ID = 'code-scanning/list-alerts-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/code-scanning/alerts';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/code-scanning/alerts';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The name of a code scanning tool. Only results by this tool will be listed. You can specify the tool by using either `tool_name` or `tool_guid`, but not both.**/
    private string $toolName;
    /**The GUID of a code scanning tool. Only results by this tool will be listed. Note that some code scanning tools may not include a GUID in their analysis data. You can specify the tool by using either `tool_guid` or `tool_name`, but not both.**/
    private string|null $toolGuid;
    /**The Git reference for the results you want to list. The `ref` for a branch can be formatted either as `refs/heads/<branch name>` or simply `<branch name>`. To reference a pull request use `refs/pull/<number>/merge`.**/
    private string $ref;
    /**If specified, only code scanning alerts with this state will be returned.**/
    private string $state;
    /**If specified, only code scanning alerts with this severity will be returned.**/
    private string $severity;
    /**Page number of the results to fetch.**/
    private int $page;
    /**The number of results per page (max 100).**/
    private int $perPage;
    /**The direction to sort the results by.**/
    private string $direction;
    /**The property by which to sort the results.**/
    private string $sort;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Alerts $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Alerts $hydrator, string $owner, string $repo, string $toolName, string|null $toolGuid, string $ref, string $state, string $severity, int $page = 1, int $perPage = 30, string $direction = 'desc', string $sort = 'created')
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->toolName = $toolName;
        $this->toolGuid = $toolGuid;
        $this->ref = $ref;
        $this->state = $state;
        $this->severity = $severity;
        $this->page = $page;
        $this->perPage = $perPage;
        $this->direction = $direction;
        $this->sort = $sort;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{tool_name}', '{tool_guid}', '{ref}', '{state}', '{severity}', '{page}', '{per_page}', '{direction}', '{sort}'), array($this->owner, $this->repo, $this->toolName, $this->toolGuid, $this->ref, $this->state, $this->severity, $this->page, $this->perPage, $this->direction, $this->sort), self::PATH . '?toolName={tool_name}&toolGuid={tool_guid}&ref={ref}&state={state}&severity={severity}&page={page}&perPage={per_page}&direction={direction}&sort={sort}'));
    }
    /**
     * @return \Rx\Observable<Schema\CodeScanningAlertItems>
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        foreach ($body as $bodyItem) {
                            $this->responseSchemaValidator->validate($bodyItem, \cebe\openapi\Reader::readFromJson(Schema\CodeScanningAlertItems::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\CodeScanningAlertItems {
                            return $this->hydrator->hydrateObject(Schema\CodeScanningAlertItems::class, $body);
                        });
                }
                break;
            /**Response if GitHub Advanced Security is not enabled for this repository**/
            case 403:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\BasicError(403, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }
                break;
            /**Resource not found**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }
                break;
            /**Service unavailable**/
            case 503:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503(503, $this->hydrator->hydrateObject(Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::class, $body));
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
