<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams;

final class RemoveProjectLegacy_
{
    private const OPERATION_ID = 'teams/remove-project-legacy';
    public const OPERATION_MATCH = 'DELETE /teams/{team_id}/projects/{project_id}';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    /**The unique identifier of the team.**/
    private readonly int $team_id;
    /**The unique identifier of the project.**/
    private readonly int $project_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, int $team_id, int $project_id)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->team_id = $team_id;
        $this->project_id = $project_id;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{team_id}', '{project_id}'), array($this->team_id, $this->project_id), '/teams/{team_id}/projects/{project_id}'));
    }
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        $hydrator = new \WyriHaximus\Hydrator\Hydrator();
        switch ($response->getStatusCode()) {
            /**Response**/
            case 204:
                switch ($contentType) {
                }
                break;
            /**Resource not found**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $hydrator->hydrate('\\ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\Schema\\BasicError', $body);
                }
                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ValidationError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $hydrator->hydrate('\\ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\Schema\\ValidationError', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}