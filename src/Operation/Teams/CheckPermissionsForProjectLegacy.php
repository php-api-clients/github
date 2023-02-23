<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Teams;

final class CheckPermissionsForProjectLegacy
{
    public const OPERATION_ID = 'teams/check-permissions-for-project-legacy';
    public const OPERATION_MATCH = 'GET /teams/{team_id}/projects/{project_id}';
    private const METHOD = 'GET';
    private const PATH = '/teams/{team_id}/projects/{project_id}';
    /**The unique identifier of the team.**/
    private int $team_id;
    /**The unique identifier of the project.**/
    private int $project_id;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Teams\CbTeamIdRcb\Projects\CbProjectIdRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Teams\CbTeamIdRcb\Projects\CbProjectIdRcb $hydrator, int $team_id, int $project_id)
    {
        $this->team_id = $team_id;
        $this->project_id = $project_id;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{team_id}', '{project_id}'), array($this->team_id, $this->project_id), self::PATH));
    }
    /**
     * @return \ApiClients\Client\Github\Schema\TeamProject
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\TeamProject
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\TeamProject::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\TeamProject', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
