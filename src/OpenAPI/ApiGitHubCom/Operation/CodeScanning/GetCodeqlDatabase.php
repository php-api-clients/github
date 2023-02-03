<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning;

final class GetCodeqlDatabase
{
    private const OPERATION_ID = 'code-scanning/get-codeql-database';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/code-scanning/codeql/databases/{language}';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator;
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The language of the CodeQL database.**/
    private string $language;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator, string $owner, string $repo, string $language)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
        $this->owner = $owner;
        $this->repo = $repo;
        $this->language = $language;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('GET', \str_replace(array('{owner}', '{repo}', '{language}'), array($this->owner, $this->repo, $this->language), '/repos/{owner}/{repo}/code-scanning/codeql/databases/{language}'));
    }
    /**
     * @return \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningCodeqlDatabase|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\GetCodeqlDatabase\Response\Application\Json\H503
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningCodeqlDatabase|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\GetCodeqlDatabase\Response\Application\Json\H503
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningCodeqlDatabase::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\CodeScanningCodeqlDatabase', $body);
                }
                break;
            /**Found**/
            case 302:
                return 302;
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
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\GetCodeqlDatabase\Response\Application\Json\H503::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\Operation\\GetCodeqlDatabase\\Response\\Application\\Json\\H503', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
