<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Migrations;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class UnlockRepoForOrg
{
    public const OPERATION_ID    = 'migrations/unlock-repo-for-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/migrations/{migration_id}/repos/{repo_name}/lock';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/migrations/{migration_id}/repos/{repo_name}/lock';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The unique identifier of the migration. **/
    private int $migrationId;
    /**repo_name parameter **/
    private string $repoName;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Repos\RepoName\Lock $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Repos\RepoName\Lock $hydrator, string $org, int $migrationId, string $repoName)
    {
        $this->org                     = $org;
        $this->migrationId             = $migrationId;
        $this->repoName                = $repoName;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{migration_id}', '{repo_name}'], [$this->org, $this->migrationId, $this->repoName], self::PATH));
    }

    /**
     * @return array{code: int}
     */
    public function createResponse(ResponseInterface $response): array
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Resource not found
                     **/
                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return ['code' => 204];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
