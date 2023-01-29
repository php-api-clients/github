<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues;

final class CheckUserCanBeAssignedToIssue
{
    private const OPERATION_ID = 'issues/check-user-can-be-assigned-to-issue';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/issues/{issue_number}/assignees/{assignee}';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\OptimizedHydratorMapper $hydrator;
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The number that identifies the issue.**/
    private int $issue_number;
    private string $assignee;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\OptimizedHydratorMapper $hydrator, string $owner, string $repo, int $issue_number, string $assignee)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
        $this->owner = $owner;
        $this->repo = $repo;
        $this->issue_number = $issue_number;
        $this->assignee = $assignee;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('GET', \str_replace(array('{owner}', '{repo}', '{issue_number}', '{assignee}'), array($this->owner, $this->repo, $this->issue_number, $this->assignee), '/repos/{owner}/{repo}/issues/{issue_number}/assignees/{assignee}'));
    }
    /**
     * @return int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response if `assignee` can be assigned to `issue_number`**/
            case 204:
                return 204;
                break;
            /**Response if `assignee` can not be assigned to `issue_number`**/
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
