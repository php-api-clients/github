<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class GetEnvironmentPublicKey
{
    private const OPERATION_ID = 'actions/get-environment-public-key';
    public const OPERATION_MATCH = 'GET /repositories/{repository_id}/environments/{environment_name}/secrets/public-key';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator;
    /**The unique identifier of the repository.**/
    private int $repository_id;
    /**The name of the environment.**/
    private string $environment_name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator, int $repository_id, string $environment_name)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
        $this->repository_id = $repository_id;
        $this->environment_name = $environment_name;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('GET', \str_replace(array('{repository_id}', '{environment_name}'), array($this->repository_id, $this->environment_name), '/repositories/{repository_id}/environments/{environment_name}/secrets/public-key'));
    }
    /**
     * @return \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsPublicKey
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsPublicKey
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsPublicKey::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\ActionsPublicKey', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
