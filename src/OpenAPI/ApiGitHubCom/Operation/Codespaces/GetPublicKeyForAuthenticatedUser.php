<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces;

final class GetPublicKeyForAuthenticatedUser
{
    private const OPERATION_ID = 'codespaces/get-public-key-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/codespaces/secrets/public-key';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('GET', \str_replace(array(), array(), '/user/codespaces/secrets/public-key'));
    }
    /**
     * @return \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesUserPublicKey
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesUserPublicKey
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesUserPublicKey::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\CodespacesUserPublicKey', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
