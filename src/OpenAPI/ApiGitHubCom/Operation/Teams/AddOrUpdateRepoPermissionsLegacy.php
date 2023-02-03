<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams;

final class AddOrUpdateRepoPermissionsLegacy
{
    private const OPERATION_ID = 'teams/add-or-update-repo-permissions-legacy';
    public const OPERATION_MATCH = 'PUT /teams/{team_id}/repos/{owner}/{repo}';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator;
    /**The unique identifier of the team.**/
    private int $team_id;
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator, int $team_id, string $owner, string $repo)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
        $this->team_id = $team_id;
        $this->owner = $owner;
        $this->repo = $repo;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AddOrUpdateRepoPermissionsLegacy\Request\Application\Json::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
        return new \RingCentral\Psr7\Request('PUT', \str_replace(array('{team_id}', '{owner}', '{repo}'), array($this->team_id, $this->owner, $this->repo), '/teams/{team_id}/repos/{owner}/{repo}'), array('Content-Type' => 'application/json'), json_encode($data));
    }
    /**
     * @return int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 204:
                return 204;
                break;
            /**Forbidden**/
            case 403:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\BasicError', $body);
                }
                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\ValidationError', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
