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

final class UnlockRepoForAuthenticatedUser
{
    public const OPERATION_ID    = 'migrations/unlock-repo-for-authenticated-user';
    public const OPERATION_MATCH = 'DELETE /user/migrations/{migration_id}/repos/{repo_name}/lock';
    private const METHOD         = 'DELETE';
    private const PATH           = '/user/migrations/{migration_id}/repos/{repo_name}/lock';
    /**The unique identifier of the migration.**/
    private int $migrationId;
    /**repo_name parameter**/
    private string $repoName;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\User\Migrations\CbMigrationIdRcb\Repos\CbRepoNameRcb\Lock $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\User\Migrations\CbMigrationIdRcb\Repos\CbRepoNameRcb\Lock $hydrator, int $migrationId, string $repoName)
    {
        $this->migrationId             = $migrationId;
        $this->repoName                = $repoName;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{migration_id}', '{repo_name}'], [$this->migrationId, $this->repoName], self::PATH));
    }

    public function createResponse(ResponseInterface $response): mixed
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Forbidden
                    **/

                    case 403:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        throw new ErrorSchemas\BasicError(403, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Requires authentication
                    **/

                    case 401:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        throw new ErrorSchemas\BasicError(401, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
