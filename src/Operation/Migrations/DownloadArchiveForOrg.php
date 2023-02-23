<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Migrations;

final class DownloadArchiveForOrg
{
    public const OPERATION_ID = 'migrations/download-archive-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/migrations/{migration_id}/archive';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/migrations/{migration_id}/archive';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The unique identifier of the migration.**/
    private int $migration_id;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Archive $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Archive $hydrator, string $org, int $migration_id)
    {
        $this->org = $org;
        $this->migration_id = $migration_id;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{migration_id}'), array($this->org, $this->migration_id), self::PATH));
    }
    /**
     * @return \ApiClients\Client\Github\Schema\BasicError
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\BasicError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
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
