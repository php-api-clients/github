<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Packages;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class GetPackageVersionForOrganization
{
    public const OPERATION_ID = 'packages/get-package-version-for-organization';
    public const OPERATION_MATCH = 'GET /orgs/{org}/packages/{package_type}/{package_name}/versions/{package_version_id}';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/packages/{package_type}/{package_name}/versions/{package_version_id}';
    /**The type of supported package. Packages in GitHub's Gradle registry have the type `maven`. Docker images pushed to GitHub's Container registry (`ghcr.io`) have the type `container`. You can use the type `docker` to find images that were pushed to GitHub's Docker registry (`docker.pkg.github.com`), even if these have now been migrated to the Container registry.**/
    private string $package_type;
    /**The name of the package.**/
    private string $package_name;
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**Unique identifier of the package version.**/
    private int $package_version_id;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions\CbPackageVersionIdRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions\CbPackageVersionIdRcb $hydrator, string $package_type, string $package_name, string $org, int $package_version_id)
    {
        $this->package_type = $package_type;
        $this->package_name = $package_name;
        $this->org = $org;
        $this->package_version_id = $package_version_id;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{package_type}', '{package_name}', '{org}', '{package_version_id}'), array($this->package_type, $this->package_name, $this->org, $this->package_version_id), self::PATH));
    }
    /**
     * @return Schema\PackageVersion
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\PackageVersion
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\PackageVersion::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\PackageVersion::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
