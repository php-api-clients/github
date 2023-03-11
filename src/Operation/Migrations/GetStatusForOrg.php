<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Migrations;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class GetStatusForOrg
{
    public const OPERATION_ID = 'migrations/get-status-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/migrations/{migration_id}';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/migrations/{migration_id}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The unique identifier of the migration.**/
    private int $migration_id;
    /**Exclude attributes from the API response to improve performance**/
    private array $exclude;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb $hydrator, string $org, int $migration_id, array $exclude)
    {
        $this->org = $org;
        $this->migration_id = $migration_id;
        $this->exclude = $exclude;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{migration_id}', '{exclude}'), array($this->org, $this->migration_id, $this->exclude), self::PATH . '?exclude={exclude}'));
    }
    /**
     * @return Schema\Migration
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Migration
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /***   `pending`, which means the migration hasn't started yet.
            *   `exporting`, which means the migration is in progress.
            *   `exported`, which means the migration finished successfully.
            *   `failed`, which means the migration failed.**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Migration::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Migration::class, $body);
                }
                break;
            /**Resource not found**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw $this->hydrator->hydrateObject(ErrorSchemas\BasicError::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
