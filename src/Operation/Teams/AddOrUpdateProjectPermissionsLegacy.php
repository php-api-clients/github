<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Teams;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class AddOrUpdateProjectPermissionsLegacy
{
    public const OPERATION_ID = 'teams/add-or-update-project-permissions-legacy';
    public const OPERATION_MATCH = 'PUT /teams/{team_id}/projects/{project_id}';
    private const METHOD = 'PUT';
    private const PATH = '/teams/{team_id}/projects/{project_id}';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    /**The unique identifier of the team.**/
    private int $team_id;
    /**The unique identifier of the project.**/
    private int $project_id;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Teams\CbTeamIdRcb\Projects\CbProjectIdRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Teams\CbTeamIdRcb\Projects\CbProjectIdRcb $hydrator, int $team_id, int $project_id)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->team_id = $team_id;
        $this->project_id = $project_id;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\Teams\AddOrUpdateProjectPermissionsLegacy\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{team_id}', '{project_id}'), array($this->team_id, $this->project_id), self::PATH), array('Content-Type' => 'application/json'), json_encode($data));
    }
    /**
     * @return Schema\Operation\Orgs\RemoveOutsideCollaborator\Response\Applicationjson\H422|Schema\BasicError|Schema\ValidationError
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Operation\Orgs\RemoveOutsideCollaborator\Response\Applicationjson\H422|Schema\BasicError|Schema\ValidationError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Validation failed, or the endpoint has been spammed.**/
            case 403:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\Orgs\RemoveOutsideCollaborator\Response\Applicationjson\H422::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\Orgs\RemoveOutsideCollaborator\Response\Applicationjson\H422::class, $body);
                }
                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\BasicError::class, $body);
                }
                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ValidationError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\ValidationError::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
