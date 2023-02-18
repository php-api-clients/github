<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\Teams\CbTeamIdRcb\Projects\CbProjectIdRcb;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamProject;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function json_decode;
use function str_replace;

final class CheckPermissionsForProjectLegacy
{
    public const OPERATION_ID    = 'teams/check-permissions-for-project-legacy';
    public const OPERATION_MATCH = 'GET /teams/{team_id}/projects/{project_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/teams/{team_id}/projects/{project_id}';
    /**The unique identifier of the team.**/
    private int $team_id;
    /**The unique identifier of the project.**/
    private int $project_id;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly CbProjectIdRcb $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, CbProjectIdRcb $hydrator, int $team_id, int $project_id)
    {
        $this->team_id                 = $team_id;
        $this->project_id              = $project_id;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{team_id}', '{project_id}'], [$this->team_id, $this->project_id], self::PATH));
    }

    function createResponse(ResponseInterface $response): TeamProject
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body        = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(TeamProject::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\TeamProject', $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
