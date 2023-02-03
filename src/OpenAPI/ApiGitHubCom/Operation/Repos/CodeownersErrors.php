<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

final class CodeownersErrors
{
    private const OPERATION_ID = 'repos/codeowners-errors';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/codeowners/errors';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator;
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**A branch, tag or commit name used to determine which version of the CODEOWNERS file to use. Default: the repository's default branch (e.g. `main`)**/
    private string $ref;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator, string $owner, string $repo, string $ref)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
        $this->owner = $owner;
        $this->repo = $repo;
        $this->ref = $ref;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('GET', \str_replace(array('{owner}', '{repo}', '{ref}'), array($this->owner, $this->repo, $this->ref), '/repos/{owner}/{repo}/codeowners/errors?ref={ref}'));
    }
    /**
     * @return \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeownersErrors|int
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeownersErrors|int
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeownersErrors::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\CodeownersErrors', $body);
                }
                break;
            /**Resource not found**/
            case 404:
                return 404;
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
