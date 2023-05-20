<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Packages;

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

final class GetAllPackageVersionsForPackageOwnedByAuthenticatedUser
{
    public const OPERATION_ID    = 'packages/get-all-package-versions-for-package-owned-by-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/packages/{package_type}/{package_name}/versions';
    private const METHOD         = 'GET';
    private const PATH           = '/user/packages/{package_type}/{package_name}/versions';
    /**The type of supported package. Packages in GitHub's Gradle registry have the type `maven`. Docker images pushed to GitHub's Container registry (`ghcr.io`) have the type `container`. You can use the type `docker` to find images that were pushed to GitHub's Docker registry (`docker.pkg.github.com`), even if these have now been migrated to the Container registry. **/
    private string $packageType;
    /**The name of the package. **/
    private string $packageName;
    /**Page number of the results to fetch. **/
    private int $page;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**The state of the package, either active or deleted. **/
    private string $state;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\User\Packages\PackageType\PackageName\Versions $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\User\Packages\PackageType\PackageName\Versions $hydrator, string $packageType, string $packageName, int $page = 1, int $perPage = 30, string $state = 'active')
    {
        $this->packageType             = $packageType;
        $this->packageName             = $packageName;
        $this->page                    = $page;
        $this->perPage                 = $perPage;
        $this->state                   = $state;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{package_type}', '{package_name}', '{page}', '{per_page}', '{state}'], [$this->packageType, $this->packageName, $this->page, $this->perPage, $this->state], self::PATH . '?page={page}&per_page={per_page}&state={state}'));
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Forbidden
                     **/

                    case 403:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(403, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Requires authentication
                     **/

                    case 401:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(401, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
