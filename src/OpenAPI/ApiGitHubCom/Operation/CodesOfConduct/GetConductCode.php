<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct;

final class GetConductCode
{
    private const OPERATION_ID = 'codes-of-conduct/get-conduct-code';
    public const OPERATION_MATCH = 'GET /codes_of_conduct/{key}';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator;
    private string $key;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator, string $key)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
        $this->key = $key;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('GET', \str_replace(array('{key}'), array($this->key), '/codes_of_conduct/{key}'));
    }
    /**
     * @return \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeOfConduct|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|int
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeOfConduct|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|int
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeOfConduct::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\CodeOfConduct', $body);
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
            /**Not modified**/
            case 304:
                return 304;
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
