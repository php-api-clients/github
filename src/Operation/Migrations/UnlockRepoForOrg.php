<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Migrations;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
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
    private int $migrationId;
    /**repo_name parameter**/
    private string $repoName;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repos\CbRepoNameRcb\Lock $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repos\CbRepoNameRcb\Lock $hydrator, string $org, int $migrationId, string $repoName)
    {
        $this->org = $org;
        $this->migrationId = $migrationId;
        $this->repoName = $repoName;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{migration_id}', '{repo_name}'), array($this->org, $this->migrationId, $this->repoName), self::PATH));
    }
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : mixed
    {
        $code = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Resource not found
                    **/
                    case 404:
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
