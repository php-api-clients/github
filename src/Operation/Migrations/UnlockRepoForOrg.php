<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Migrations;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class UnlockRepoForOrg
{
    public const OPERATION_ID = 'migrations/unlock-repo-for-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/migrations/{migration_id}/repos/{repo_name}/lock';
    private const METHOD = 'DELETE';
    private const PATH = '/orgs/{org}/migrations/{migration_id}/repos/{repo_name}/lock';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The unique identifier of the migration.**/
    private int $migration_id;
    /**repo_name parameter**/
    private string $repo_name;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repos\CbRepoNameRcb\Lock $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repos\CbRepoNameRcb\Lock $hydrator, string $org, int $migration_id, string $repo_name)
    {
        $this->org = $org;
        $this->migration_id = $migration_id;
        $this->repo_name = $repo_name;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{migration_id}', '{repo_name}'), array($this->org, $this->migration_id, $this->repo_name), self::PATH));
    }
    /**
     * @return Schema\BasicError
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\BasicError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Resource not found**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\BasicError::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
