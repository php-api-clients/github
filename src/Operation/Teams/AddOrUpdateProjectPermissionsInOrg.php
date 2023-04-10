<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Teams;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class AddOrUpdateProjectPermissionsInOrg
{
    public const OPERATION_ID = 'teams/add-or-update-project-permissions-in-org';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/teams/{team_slug}/projects/{project_id}';
    private const METHOD = 'PUT';
    private const PATH = '/orgs/{org}/teams/{team_slug}/projects/{project_id}';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The slug of the team name.**/
    private string $teamSlug;
    /**The unique identifier of the project.**/
    private int $projectId;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Projects\CbProjectIdRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Projects\CbProjectIdRcb $hydrator, string $org, string $teamSlug, int $projectId)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->org = $org;
        $this->teamSlug = $teamSlug;
        $this->projectId = $projectId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\Teams\AddOrUpdateProjectPermissionsInOrg\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{team_slug}', '{project_id}'), array($this->org, $this->teamSlug, $this->projectId), self::PATH), array('Content-Type' => 'application/json'), json_encode($data));
    }
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : mixed
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Forbidden if the project is not owned by the organization**/
            case 403:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\Teams\AddOrUpdateProjectPermissionsInOrg\Response\Applicationjson\H403::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\Operation\Teams\AddOrUpdateProjectPermissionsInOrg\Response\Applicationjson\H403(403, $this->hydrator->hydrateObject(Schema\Operation\Teams\AddOrUpdateProjectPermissionsInOrg\Response\Applicationjson\H403::class, $body));
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
