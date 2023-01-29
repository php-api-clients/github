<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues;

final class DeleteMilestone
{
    private const OPERATION_ID = 'issues/delete-milestone';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/milestones/{milestone_number}';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\OptimizedHydratorMapper $hydrator;
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The number that identifies the milestone.**/
    private int $milestone_number;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\OptimizedHydratorMapper $hydrator, string $owner, string $repo, int $milestone_number)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
        $this->owner = $owner;
        $this->repo = $repo;
        $this->milestone_number = $milestone_number;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('DELETE', \str_replace(array('{owner}', '{repo}', '{milestone_number}'), array($this->owner, $this->repo, $this->milestone_number), '/repos/{owner}/{repo}/milestones/{milestone_number}'));
    }
    /**
     * @return int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 204:
                return 204;
                break;
            /**Resource not found**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\BasicError', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
