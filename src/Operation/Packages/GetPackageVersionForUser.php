<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Packages;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class GetPackageVersionForUser
{
    public const OPERATION_ID = 'packages/get-package-version-for-user';
    public const OPERATION_MATCH = 'GET /users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}';
    private const METHOD = 'GET';
    private const PATH = '/users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}';
    /**The type of supported package. Packages in GitHub's Gradle registry have the type `maven`. Docker images pushed to GitHub's Container registry (`ghcr.io`) have the type `container`. You can use the type `docker` to find images that were pushed to GitHub's Docker registry (`docker.pkg.github.com`), even if these have now been migrated to the Container registry.**/
    private string $packageType;
    /**The name of the package.**/
    private string $packageName;
    /**Unique identifier of the package version.**/
    private int $packageVersionId;
    /**The handle for the GitHub user account.**/
    private string $username;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Users\CbUsernameRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions\CbPackageVersionIdRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Users\CbUsernameRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions\CbPackageVersionIdRcb $hydrator, string $packageType, string $packageName, int $packageVersionId, string $username)
    {
        $this->packageType = $packageType;
        $this->packageName = $packageName;
        $this->packageVersionId = $packageVersionId;
        $this->username = $username;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{package_type}', '{package_name}', '{package_version_id}', '{username}'), array($this->packageType, $this->packageName, $this->packageVersionId, $this->username), self::PATH));
    }
    /**
     * @return Schema\PackageVersion
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\PackageVersion
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
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
