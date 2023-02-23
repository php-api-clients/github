<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Migrations;

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
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb $hydrator, string $org, int $migration_id, array $exclude)
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
     * @return \ApiClients\Client\Github\Schema\Migration|\ApiClients\Client\Github\Schema\BasicError
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\Migration|\ApiClients\Client\Github\Schema\BasicError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Resource not found**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\Migration::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\Migration', $body);
                }
                break;
            /**Resource not found**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\BasicError', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
