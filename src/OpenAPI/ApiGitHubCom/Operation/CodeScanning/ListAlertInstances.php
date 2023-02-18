<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts\CbAlertNumberRcb\Instances;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAlertInstance;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;

use function json_decode;
use function str_replace;

final class ListAlertInstances
{
    public const OPERATION_ID    = 'code-scanning/list-alert-instances';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}/instances';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/code-scanning/alerts/{alert_number}/instances';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The number that identifies an alert. You can find this at the end of the URL for a code scanning alert within GitHub, and in the `number` field in the response from the `GET /repos/{owner}/{repo}/code-scanning/alerts` operation.**/
    private int $alert_number;
    /**The Git reference for the results you want to list. The `ref` for a branch can be formatted either as `refs/heads/<branch name>` or simply `<branch name>`. To reference a pull request use `refs/pull/<number>/merge`.**/
    private string $ref;
    /**Page number of the results to fetch.**/
    private int $page;
    /**The number of results per page (max 100).**/
    private int $per_page;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Instances $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Instances $hydrator, string $owner, string $repo, int $alert_number, string $ref, int $page = 1, int $per_page = 30)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->alert_number            = $alert_number;
        $this->ref                     = $ref;
        $this->page                    = $page;
        $this->per_page                = $per_page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{alert_number}', '{ref}', '{page}', '{per_page}'], [$this->owner, $this->repo, $this->alert_number, $this->ref, $this->page, $this->per_page], self::PATH . '?ref={ref}&page={page}&per_page={per_page}'));
    }

    /**
     * @return Observable<CodeScanningAlertInstance>|BasicError|H503
     */
    function createResponse(ResponseInterface $response): Observable|BasicError|H503
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body        = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Service unavailable**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(CodeScanningAlertInstance::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): CodeScanningAlertInstance {
                            return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\CodeScanningAlertInstance', $body);
                        });
                }

                break;
            /**Service unavailable**/
            case 403:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\BasicError', $body);
                }

                break;
            /**Service unavailable**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\BasicError', $body);
                }

                break;
            /**Service unavailable**/
            case 503:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(H503::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\Operation\\SecretScanning\\ListAlertsForEnterprise\\Response\\Applicationjson\\H503', $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
