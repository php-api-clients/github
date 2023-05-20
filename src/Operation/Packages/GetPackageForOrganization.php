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

final class GetPackageForOrganization
{
    public const OPERATION_ID    = 'packages/get-package-for-organization';
    public const OPERATION_MATCH = 'GET /orgs/{org}/packages/{package_type}/{package_name}';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/packages/{package_type}/{package_name}';
    /**The type of supported package. Packages in GitHub's Gradle registry have the type `maven`. Docker images pushed to GitHub's Container registry (`ghcr.io`) have the type `container`. You can use the type `docker` to find images that were pushed to GitHub's Docker registry (`docker.pkg.github.com`), even if these have now been migrated to the Container registry. **/
    private string $packageType;
    /**The name of the package. **/
    private string $packageName;
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName $hydrator, string $packageType, string $packageName, string $org)
    {
        $this->packageType             = $packageType;
        $this->packageName             = $packageName;
        $this->org                     = $org;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{package_type}', '{package_name}', '{org}'], [$this->packageType, $this->packageName, $this->org], self::PATH));
    }

    public function createResponse(ResponseInterface $response): Schema\Package
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Package::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\Package::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
