<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class GetRepoVariable
{
    private const OPERATION_ID = 'actions/get-repo-variable';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/variables/{name}';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\OptimizedHydratorMapper $hydrator;
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The name of the variable.**/
    private string $name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\OptimizedHydratorMapper $hydrator, string $owner, string $repo, string $name)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
        $this->owner = $owner;
        $this->repo = $repo;
        $this->name = $name;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('GET', \str_replace(array('{owner}', '{repo}', '{name}'), array($this->owner, $this->repo, $this->name), '/repos/{owner}/{repo}/actions/variables/{name}'));
    }
    /**
     * @return \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsVariable
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsVariable
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsVariable::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\ActionsVariable', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}