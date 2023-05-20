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

use function explode;
use function json_decode;
use function str_replace;

final class GetPackageVersionForUser
{
    public const OPERATION_ID    = 'packages/get-package-version-for-user';
    public const OPERATION_MATCH = 'GET /users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}';
    /**The type of supported package. Packages in GitHub's Gradle registry have the type `maven`. Docker images pushed to GitHub's Container registry (`ghcr.io`) have the type `container`. You can use the type `docker` to find images that were pushed to GitHub's Docker registry (`docker.pkg.github.com`), even if these have now been migrated to the Container registry. **/
    private string $packageType;
    /**The name of the package. **/
    private string $packageName;
    /**Unique identifier of the package version. **/
    private int $packageVersionId;
    /**The handle for the GitHub user account. **/
    private string $username;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId $hydrator, string $packageType, string $packageName, int $packageVersionId, string $username)
    {
        $this->packageType             = $packageType;
        $this->packageName             = $packageName;
        $this->packageVersionId        = $packageVersionId;
        $this->username                = $username;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{package_type}', '{package_name}', '{package_version_id}', '{username}'], [$this->packageType, $this->packageName, $this->packageVersionId, $this->username], self::PATH));
    }

    public function createResponse(ResponseInterface $response): Schema\PackageVersion
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\PackageVersion::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\PackageVersion::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
