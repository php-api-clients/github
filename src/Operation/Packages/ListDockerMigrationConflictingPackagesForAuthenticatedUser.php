<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Packages;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;
use Throwable;

use function explode;
use function json_decode;
use function str_replace;

final class ListDockerMigrationConflictingPackagesForAuthenticatedUser
{
    public const OPERATION_ID    = 'packages/list-docker-migration-conflicting-packages-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/docker/conflicts';
    private const METHOD         = 'GET';
    private const PATH           = '/user/docker/conflicts';

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrator\Operation\User\Docker\Conflicts $hydrator)
    {
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace([], [], self::PATH));
    }

    /** @return Observable<Schema\Package> */
    public function createResponse(ResponseInterface $response): Observable
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                     **/
                    case 200:
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\Package {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Package::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\Package::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
