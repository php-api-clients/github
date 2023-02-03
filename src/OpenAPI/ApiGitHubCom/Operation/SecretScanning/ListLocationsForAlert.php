<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning;

final class ListLocationsForAlert
{
    private const OPERATION_ID = 'secret-scanning/list-locations-for-alert';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}/locations';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator;
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The number that identifies an alert. You can find this at the end of the URL for a code scanning alert within GitHub, and in the `number` field in the response from the `GET /repos/{owner}/{repo}/code-scanning/alerts` operation.**/
    private int $alert_number;
    /**Page number of the results to fetch.**/
    private int $page;
    /**The number of results per page (max 100).**/
    private int $per_page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator, string $owner, string $repo, int $alert_number, int $page = 1, int $per_page = 30)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
        $this->owner = $owner;
        $this->repo = $repo;
        $this->alert_number = $alert_number;
        $this->page = $page;
        $this->per_page = $per_page;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('GET', \str_replace(array('{owner}', '{repo}', '{alert_number}', '{page}', '{per_page}'), array($this->owner, $this->repo, $this->alert_number, $this->page, $this->per_page), '/repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}/locations?page={page}&per_page={per_page}'));
    }
    /**
     * @return \Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecretScanningLocation>|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\ListLocationsForAlert\Response\Application\Json\H503
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\ListLocationsForAlert\Response\Application\Json\H503
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecretScanningLocation::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecretScanningLocation {
                            return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\SecretScanningLocation', $body);
                        });
                }
                break;
            /**Repository is public, or secret scanning is disabled for the repository, or the resource is not found**/
            case 404:
                return 404;
                break;
            /**Service unavailable**/
            case 503:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\ListLocationsForAlert\Response\Application\Json\H503::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\Operation\\ListLocationsForAlert\\Response\\Application\\Json\\H503', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
